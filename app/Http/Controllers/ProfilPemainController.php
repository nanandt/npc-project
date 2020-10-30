<?php

namespace App\Http\Controllers;

use App\{CabangOlahraga, Pemain};
use Illuminate\Http\Request;

class ProfilPemainController extends Controller
{
    public function index(Request $request, $pemain_id)
    {
        $cabors = CabangOlahraga::with('pemains')->get();
        $items = Pemain::with('detail_pemain')->where('pemain_id', $pemain_id)->first();

        return view('pages.profile-pemain', [
            'cabors' => $cabors,
            'items' => $items
        ]);
    }
}
