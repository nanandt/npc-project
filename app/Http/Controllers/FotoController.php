<?php

namespace App\Http\Controllers;

use App\CabangOlahraga;
use Illuminate\Http\Request;

class FotoController extends Controller
{
    public function index()
    {
        $cabors = CabangOlahraga::with(['pemains', 'pelatihs', 'galleries'])->take(3)->get();
        $items = CabangOlahraga::with(['pemains', 'pelatihs', 'galleries'])->skip(3)->take(3)->get();
        return view('pages.foto', [
            'cabors' => $cabors,
            'items' => $items
        ]);
    }
}
