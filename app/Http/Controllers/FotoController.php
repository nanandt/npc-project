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
<<<<<<< HEAD
        $cabors1 = CabangOlahraga::with(['pemains', 'pelatihs'])->take(3)->get();
        $items = CabangOlahraga::with(['pemains', 'pelatihs'])->skip(3)->take(3)->get();
=======
        
        $items = Photo::latest()->paginate(12);
        
        
>>>>>>> 382111bc0cc5702afde1c67f6cdd7b9cfff76aab
        return view('pages.foto', [
            'cabors' => $cabors,
            'items' => $items
        ]);
    }
}
