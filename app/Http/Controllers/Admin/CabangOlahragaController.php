<?php

namespace App\Http\Controllers\Admin;

use App\CabangOlahraga;
use App\Http\Controllers\Controller;
use App\Pelatih;
use App\Pemain;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class CabangOlahragaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $items = CabangOlahraga::with('pemains', 'pelatihs')->latest()->get();

      return view('pages.admin.cabang-olahraga.index',[
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
        return view('pages.admin.cabang-olahraga.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
        'nama_cabor' => 'required'
      ]);

      $data = $request->all();

      CabangOlahraga::create($data);

      Alert::success('Selamat', 'Data Berhasil Ditambahkan');

      return redirect()->route('cabang-olahraga.index');
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
        $item = CabangOlahraga::findOrFail($id);

        return view('pages.admin.cabang-olahraga.edit',[
            'item' => $item
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

        $item = CabangOlahraga::findOrFail($id);

        $item->update($data);

        Alert::info('Selamat', 'Data Berhasil Diupdate');

        return redirect()->route('cabang-olahraga.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item_pemain = Pemain::where('cabang_olahraga_id', $id)->get();
        foreach($item_pemain as $item)
        {
            $pemain = Pemain::findOrFail($item->pemain_id);
            $pemain->delete();
        }
        $item_pelatih = Pelatih::where('cabang_olahraga_id', $id)->get();
        foreach($item_pelatih as $item)
        {
            $pelatih = Pelatih::findOrFail($item->pelatih_id);
            $pelatih->delete();
        }
      $item = CabangOlahraga::findOrFail($id);

      $item->delete();

      Alert::warning('Selamat', 'Data Berhasil Dihapus');

      return redirect()->route('cabang-olahraga.index');
    }
}
