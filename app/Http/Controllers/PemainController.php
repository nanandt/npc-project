<?php

namespace App\Http\Controllers;

use App\{CabangOlahraga, Pemain};
use Illuminate\Http\Request;

class PemainController extends Controller
{
    public function index(Request $request)
    {
        $cabors = CabangOlahraga::with('pemains')->get();
        $items = Pemain::with('cabang_olahraga')->where('cabang_olahraga_id', $request->cabang_olahraga_id)->take(4)->get();
        // dd($items);
        return view('pages.pemain', [
        'items' => $items,
        'cabors' => $cabors
        ]);
    }
}
