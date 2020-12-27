<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CabangOlahraga;

class TermsController extends Controller
{
    public function index()
    {
        $cabors = CabangOlahraga::with('pemains', 'pelatihs')->get();
        return view('pages.terms', [
          'cabors' => $cabors
      ]);
    }
}
