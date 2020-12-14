<?php

namespace App\Http\Controllers;

use App\CabangOlahraga;
use Illuminate\Http\Request;

class FotoController extends Controller
{
    public function index()
    {
        $cabors = CabangOlahraga::with(['pemains', 'pelatihs'])->get();
        $cabors1 = CabangOlahraga::with(['pemains', 'pelatihs'])->take(3)->get();
        $items = CabangOlahraga::with(['pemains', 'pelatihs'])->skip(3)->take(3)->get();
        return view('pages.foto', [
            'cabors1' => $cabors1,
            'items' => $items,
            'cabors' => $cabors
        ]);
    }
}
