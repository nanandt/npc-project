<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Video;
use RealRashid\SweetAlert\Facades\Alert;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Video::all();
        return view('pages.admin.video.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.video.create');
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
            'video' => 'required|mimes:mp4,mpg,mpeg,mov,avi,flv,wmv|max:30048'
        ]);

        $data['video'] = $request->file('video')->store('assets/video', 'public');

        Video::create($data);

        Alert::success('Selamat', 'Data Berhasil Ditambahkan');

        return redirect()->route('video.index');
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
        $item = Video::findOrFail($id);
        return view('pages.admin.video.edit', compact('item'));
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
            'video' => 'required|mimes:mp4,mpg,mpeg,mov,avi,flv,wmv|max:30048'
        ]);
        $data['video'] = $request->file('video')->store('assets/video', 'public');

        $item = Video::findOrFail($id);

        $item->update($data);

        Alert::success('Selamat', 'Data Berhasil Dihapus');

        return redirect()->route('video.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Video::findOrFail($id);

        $item->delete();

        Alert::success('Selamat', 'Data Berhasil Dihapus');

        return redirect()->route('video.index');
    }
}
