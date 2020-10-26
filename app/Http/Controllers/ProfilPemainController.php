<?php

namespace App\Http\Controllers;

use App\{CabangOlahraga, Pemain};
use Illuminate\Http\Request;

class ProfilPemainController extends Controller
{
    public function index(Request $request, $pemain_id)
    {
        $cabors = CabangOlahraga::with('pemains')->get();
        $item = Pemain::with('cabang_olahraga')->where('pemain_id', $pemain_id)->firstOrFail();

        return view('pages.profile-pemain', [
            'cabors' => $cabors,
            'item' => $item
        ]);
    }
}
