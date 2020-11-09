<?php

namespace App\Http\Controllers;

use App\CabangOlahraga;
use App\Video;
use Illuminate\Http\Request;

class VidioController extends Controller
{
    public function index(Request $request)
    {
        $cabors = CabangOlahraga::with(['pemains', 'pelatihs', 'galleries'])->get();
        $items = Video::get();
        return view('pages.video', [
            'cabors' => $cabors,
            'items' => $items
        ]);
    }
}
