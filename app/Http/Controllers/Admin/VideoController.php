<?php

namespace App\Http\Controllers\Admin;

use App\CabangOlahraga;
use App\Http\Controllers\Controller;
use App\Http\Requests\VideoRequest;
use App\Video;
use Illuminate\Http\Request;
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
        $items = Video::with('pidio')->get();
        return view('pages.admin.videos.index', [
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
        return view('pages.admin.videos.create', [
            'cabors' => $cabors
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(VideoRequest $request)
    {
        $data = $request->all();
        $data['video'] = $request->file('video')->store(
            'assets/videos', 'public'
        );

        Video::create($data);

        Alert::success('Selamat', 'Data Berhasil Ditambahkan');

        return redirect()->route('videos.index');
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
        $cabors = CabangOlahraga::all();

        return view('pages.admin.videos.edit',[
            'item' => $item,
            'cabors' => $cabors
        ]);
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
        $data = $request->all();
        $data['video'] = $request->file('video')->store(
            'assets/videos', 'public'
        );

        $item = Video::findOrFail($id);

        $item->update($data);

        Alert::info('Selamat', 'Data Berhasil Diubah');

        return redirect()->route('videos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Video::findOrfail($id);

        $item->delete();

        Alert::success('Selamat', 'Data Berhasil Dihapus');

        return redirect()->route('videos.index');
    }
}
