<?php

namespace App\Http\Controllers;

use App\CabangOlahraga;
use Illuminate\Http\Request;

class JadwalController extends Controller
{
    public function index()
    {
        $cabors = CabangOlahraga::all();
        return view('pages.jadwal', [
            'cabors' => $cabors
        ]);
    }
}
