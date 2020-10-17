<?php

namespace App\Http\Controllers\Admin;

use App\CabangOlahraga;
use App\Http\Controllers\Controller;
use App\Http\Requests\CoachRequest;
use App\Pelatih;
use Illuminate\Http\Request;
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
        $data['thumbnail'] = $request->file('thumbnail')->store(
            'assets/coach', 'public'
        );

        Pelatih::create($data);

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
