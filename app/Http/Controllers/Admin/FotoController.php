<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Photo;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;


class FotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Photo::all();
        return view('pages.admin.photos.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.photos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'foto' => 'required|mimes:jpg,png,svg|max:2048'
        ]);

        $data['foto'] = $request->file('foto')->store('assets/foto', 'public');

        Photo::create($data);

        Alert::success('Selamat', 'Data Berhasil Ditambahkan');

        return redirect()->route('photos.index');
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
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Photo::findOrFail($id);
        return view('pages.admin.photos.edit', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'foto' => 'required|mimes:jpg,png,svg|max:2048'
        ]);
        $data['foto'] = $request->file('foto')->store('assets/foto', 'public');

        $item = Photo::findOrFail($id);

        $item->update($data);

        Alert::success('Selamat', 'Data Berhasil Ditambahkan');

        return redirect()->route('photos.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Photo::findOrFail($id);

        $item->delete();

        Alert::success('Selamat', 'Data Berhasil Dihapus');

        return redirect()->route('photos.index');
    }
}
