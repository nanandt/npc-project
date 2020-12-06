<?php

namespace App\Http\Controllers\Admin;

use App\CabangOlahraga;
use App\Gallery;
use App\Http\Controllers\Controller;
use App\Http\Requests\GalleryRequest;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Gallery::with(['cabor'])->get();
        return view('pages.admin.gallery.index',[
            'items' => $items
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cabors = CabangOlahraga::all();
        return view('pages.admin.gallery.create', [
            'cabors' => $cabors
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GalleryRequest $request)
    {
        $data = $request->all();
        $data['foto'] = $request->file('foto')->store(
            'assets/gallery', 'public'
        );
        $data['video'] = $request->file('video')->store(
            'assets/videos', 'public'
        );

        Gallery::create($data);

        Alert::success('Selamat', 'Data Berhasil Ditambahkan');

        return redirect()->route('gallery.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Gallery::findOrFail($id);
        $cabors = CabangOlahraga::all();

        return view('pages.admin.gallery.edit',[
            'item' => $item,
            'cabors' => $cabors
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(GalleryRequest $request, $id)
    {
        $data = $request->all();
        // dd($data);

        $data['foto'] = $request->file('foto')->store(
            'assets/gallery', 'public'
        );
        $data['video'] = $request->file('video')->store(
            'assets/videos', 'public'
        );

        $item = Gallery::findOrFail($id);


        $item->update($data);

        Alert::info('Selamat', 'Data Berhasil Diedit');

        return redirect()->route('gallery.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Gallery::findOrFail($id);

        $item->delete();

        Alert::success('Selamat', 'Data Berhasil Dihapus');

        return redirect()->route('gallery.index');
    }
}
