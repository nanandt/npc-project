<?php

namespace App\Http\Controllers;

use App\CabangOlahraga;
use Illuminate\Http\Request;
use App\Video;

class VidioController extends Controller
{
    public function index(Request $request)
    {
        $cabors = CabangOlahraga::with(['pemains', 'pelatihs'])->get();

        $items = Video::latest()->paginate(12);
        return view('pages.video', [
            'cabors' => $cabors,
            'items' => $items
        ]);
    }
}
