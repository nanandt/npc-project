<?php

namespace App\Http\Controllers;

use App\CabangOlahraga;
use Illuminate\Http\Request;

class FotoController extends Controller
{
    public function index()
    {
        $cabors = CabangOlahraga::with(['pemains', 'pelatihs', 'galleries'])->get();
        return view('pages.foto', [
            'cabors' => $cabors
        ]);
    }
}
