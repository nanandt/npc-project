<?php

namespace App\Http\Controllers;

use App\{CabangOlahraga, Gallery, Post};
use Illuminate\Http\Request;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $cabors = CabangOlahraga::with('pemains', 'pelatihs')->get();

        $lates = Post::latest()->skip(5)->take(5)->get();

        $randoms = Post::inRandomOrder()->take(5)->get();

        $items = Post::latest()->limit(5)->get();
        return view('pages.home', [
            'cabors' => $cabors,
            'lates' => $lates,
            'randoms' => $randoms,
            'items' => $items,
            'videos' => $videos
        ]);
    }
}
