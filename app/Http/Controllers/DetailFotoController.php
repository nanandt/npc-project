<?php

namespace App\Http\Controllers;

use App\CabangOlahraga;
use App\Gallery;
use Illuminate\Http\Request;

class DetailFotoController extends Controller
{
    public function index(Request $request, $nama_cabor)
    {   $item = CabangOlahraga::with(['pemains', 'pelatihs','galleries'])->where('nama_cabor', $nama_cabor)->firstOrFail();
        return view('pages.detail-foto', [
            'item' => $item
        ]);
    }
}
