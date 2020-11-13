<?php

namespace App\Http\Controllers\Admin;

use App\CabangOlahraga;
use App\DetailPelatih;
use App\DetailPemain;
use App\Http\Controllers\Controller;
use App\Http\Requests\CoachRequest;
use App\Pelatih;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;

class CoachController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Pelatih::with('cabang_olahraga')->get();
        return view('pages.admin.coachs.index', [
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
        return view('pages.admin.coachs.create',[
            'cabors' => $cabors
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CoachRequest $request)
    {
        $data = $request->all();
        // dd($data);

        $data = new Pelatih;
        $data->nama_pelatih = $request['nama_pelatih'];
        $data->cabang_olahraga_id = $request['cabang_olahraga_id'];
        $data['thumbnail'] = $request->file('thumbnail')->store(
            'assets/player', 'public'
        );
        $data->save();

        // $detailpemain = New DetailPemain;
        // $detailpemain->pemain_id = $data->pemain_id;
        // $detailpemain->prestasi = $request['prestasi'];
        // $detailpemain->save();
        $validator = Validator::make($request->all(), [
            'prestasi.*' => 'required',
            'pertandingan_mengesankan.*' => 'required',
            'pertandingan_mengecewakan.*' => 'required',
            'lawan_tangguh.*' => 'required',
            'rekan_berlatih.*' => 'required',
            'hobi.*' => 'required',
            'makanan_favorit.*' => 'required',
            'atlit_favorit.*' => 'required',
            'cita_cita.*' => 'required',
        ]);

            if($validator->fails()) {
            return back()->withInput()->withErrors($validator->errors());
  }
        if(count($request['prestasi'] > 0)){
            foreach($request['prestasi'] as $item => $v){
                $data2 = array(
                    'pelatih_id' => $data->pelatih_id,
                    'prestasi' => $request['prestasi'][$item],
                    'pertandingan_mengesankan' => $request['pertandingan_mengesankan'][$item],
                    'pertandingan_mengecewakan' => $request['pertandingan_mengecewakan'][$item],
                    'lawan_tangguh' => $request['lawan_tangguh'][$item],
                    'rekan_berlatih' => $request['rekan_berlatih'][$item],
                    'hobi' => $request['hobi'][$item],
                    'makanan_favorit' => $request['makanan_favorit'][$item],
                    'atlit_favorit' => $request['atlit_favorit'][$item],
                    'cita_cita' => $request['cita_cita'][$item]
                );
                DetailPelatih::create($data2);
            }
        }

        Alert::success('Selamat', 'Data Berhasil Ditambahkan');

        return redirect()->route('coachs.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $item = Pelatih::findOrFail($id);
        $cabors = CabangOlahraga::all();

        return view('pages.admin.coachs.edit', [
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

        $data['thumbnail'] = $request->file('thumbnail')->store('assets/coach', 'public');

        $item = Pelatih::findOrFail($id);

        $item->update($data);

        Alert::info('Selamat', 'Data Berhasil Diedit');

        return redirect()->route('coachs.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Pelatih::find($id);

        $item->delete();

        Alert::success('Selamat', 'Data Berhasil Dihapus');

        return redirect()->route('coachs.index');
    }
}
