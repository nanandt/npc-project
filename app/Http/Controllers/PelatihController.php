<?php

namespace App\Http\Controllers;

use App\{CabangOlahraga, Pelatih};
use Illuminate\Http\Request;

class PelatihController extends Controller
{
    public function index(Request $request)
    {
        $cabors = CabangOlahraga::with('pelatihs')->get();
        $items = Pelatih::with('cabang_olahraga')->where('cabang_olahraga_id', $request->cabang_olahraga_id)->take(3)->get();
        $items1 = Pelatih::with('cabang_olahraga')->where('cabang_olahraga_id', $request->cabang_olahraga_id)->skip(3)->take(3)->get();
        $items2 = Pelatih::with('cabang_olahraga')->where('cabang_olahraga_id', $request->cabang_olahraga_id)->skip(6)->take(3)->get();
        $items3 = Pelatih::with('cabang_olahraga')->where('cabang_olahraga_id', $request->cabang_olahraga_id)->skip(9)->take(3)->get();
        return view('pages.pelatih', [
            'cabors' => $cabors,
            'items' => $items,
            'items1' => $items1,
            'items2' => $items2,
            'items3' => $items3
        ]);
    }
}
