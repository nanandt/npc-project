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
        
        $items = Photo::latest()->take(3)->get();
        $items1 = Photo::take(3)->get();
        $items2 = Photo::skip(3)->take(3)->get();
        
        
        return view('pages.foto', [
            'cabors' => $cabors,
            'items' => $items,
            'items1' => $items1,
            'items2' => $items2
        ]);
    }
}
