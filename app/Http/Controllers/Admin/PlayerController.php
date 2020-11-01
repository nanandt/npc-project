<?php

namespace App\Http\Controllers\Admin;

use App\CabangOlahraga;
use App\DetailPemain;
use App\Http\Controllers\Controller;
use App\Http\Requests\PlayerRequest;
use App\Pemain;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class PlayerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Pemain::with('cabang_olahraga')->get();
        return view('pages.admin.players.index',[
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
        return view('pages.admin.players.create',[
            'cabors' => $cabors
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PlayerRequest $request)
    {
        $data = $request->all();
        // dd($data);

        $data = new Pemain;
        $data->nama_pemain = $request['nama_pemain'];
        $data->email = $request['email'];
        $data->tahun_bergabung = $request['tahun_bergabung'];
        $data->cabang_olahraga_id = $request['cabang_olahraga_id'];
        $data['thumbnail'] = $request->file('thumbnail')->store(
            'assets/player', 'public'
        );
        $data->save();

        // $detailpemain = New DetailPemain;
        // $detailpemain->pemain_id = $data->pemain_id;
        // $detailpemain->prestasi = $request['prestasi'];
        // $detailpemain->save();
        if(count($request['prestasi'] > 0)){
            foreach($request['prestasi'] as $item => $v){
                $data2 = array(
                    'pemain_id' => $data->pemain_id,
                    'prestasi' => $request['prestasi'][$item],
                    'pertandingan_mengesankan' => $request['pertandingan_mengesankan'][$item],
                    'pertandingan_mengecewakan' => $request['pertandingan_mengecewakan'][$item],
                    'lawan_tangguh' => $request['lawan_tangguh'][$item],
                    'rekan_berlatih' => $request['rekan_berlatih'][$item]
                );
                DetailPemain::create($data2);
            }
        }

        Alert::success('Selamat', 'Data Berhasil Ditambahkan');

        return redirect()->route('players.index');
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
        $item = Pemain::findOrFail($id);
        $cabors = CabangOlahraga::all();

        return view('pages.admin.players.edit', [
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
    public function update(PlayerRequest $request, $id)
    {
        $data = $request->all();

        $data['thumbnail'] = $request->file('thumbnail')->store('assets/player', 'public');

        $item = Pemain::findOrFail($id);

        $item->update($data);

        Alert::info('Selamat', 'Data Berhasil Diedit');

        return redirect()->route('players.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Pemain::find($id);

        $item->delete();

        Alert::success('Selamat', 'Data Berhasil Dihapus');

        return redirect()->route('players.index');
    }
}
