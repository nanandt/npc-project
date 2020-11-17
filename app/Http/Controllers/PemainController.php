<?php

namespace App\Http\Controllers;

use App\{CabangOlahraga, Pemain};
use Illuminate\Http\Request;

class PemainController extends Controller
{
    public function index(Request $request)
    {
        $cabors = CabangOlahraga::with('pemains')->get();
        $items = Pemain::with('cabang_olahraga')->where('cabang_olahraga_id', $request->cabang_olahraga_id)->take(3)->get();
        $items1 = Pemain::with('cabang_olahraga')->where('cabang_olahraga_id', $request->cabang_olahraga_id)->skip(3)->take(3)->get();
        $items2 = Pemain::with('cabang_olahraga')->where('cabang_olahraga_id', $request->cabang_olahraga_id)->skip(6)->take(3)->get();
        $items3 = Pemain::with('cabang_olahraga')->where('cabang_olahraga_id', $request->cabang_olahraga_id)->skip(9)->take(3)->get();
        $items4 = Pemain::with('cabang_olahraga')->where('cabang_olahraga_id', $request->cabang_olahraga_id)->skip(12)->take(3)->get();
        $items5 = Pemain::with('cabang_olahraga')->where('cabang_olahraga_id', $request->cabang_olahraga_id)->skip(15)->take(3)->get();
        $items6 = Pemain::with('cabang_olahraga')->where('cabang_olahraga_id', $request->cabang_olahraga_id)->skip(18)->take(3)->get();
        // dd($items);
        return view('pages.pemain', [
        'items' => $items,
        'cabors' => $cabors,
        'items1' => $items1,
        'items2' => $items2,
        'items3' => $items3,
        'items4' => $items4,
        'items5' => $items5,
        'items6' => $items6
        ]);
    }
}
