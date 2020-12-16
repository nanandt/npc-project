<?php

namespace App\Http\Controllers;

use App\CabangOlahraga;
use App\Photo;
use Illuminate\Http\Request;

class FotoController extends Controller
{
    public function index()
    {
        $cabors = CabangOlahraga::with(['pemains', 'pelatihs'])->get();

        $items = Photo::latest()->paginate(12);
        return view('pages.foto', [
            'cabors' => $cabors,
            'items' => $items
        ]);
    }
}
