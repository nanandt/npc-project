<?php

namespace App\Http\Controllers;

use App\CabangOlahraga;
use Illuminate\Http\Request;

class VidioController extends Controller
{
    public function index(Request $request)
    {
        $cabors = CabangOlahraga::with(['pemains', 'pelatihs', 'galleries'])->get();
        $items = CabangOlahraga::with(['galleries'])->take(3)->get();
        $items1 = CabangOlahraga::with(['galleries'])->skip(3)->take(3)->get();
        return view('pages.video', [
            'cabors' => $cabors,
            'items' => $items,
            'items1' => $items1
        ]);
    }

    public function show(Request $request, $nama_cabor)
    {
        $cabors = CabangOlahraga::with(['pemains', 'pelatihs', 'galleries'])->get();
        $item = CabangOlahraga::with(['galleries'])->where('nama_cabor', $nama_cabor)->firstOrFail();
        return view('pages.detail-video', [
            'item' => $item,
            'cabors' => $cabors
        ]);
    }
}
