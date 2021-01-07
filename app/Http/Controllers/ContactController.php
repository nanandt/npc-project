<?php

namespace App\Http\Controllers;

use App\CabangOlahraga;
use App\Message;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $cabors = CabangOlahraga::with('pemains', 'pelatihs')->get();
        return view('pages.contact', [
            'cabors' => $cabors
        ]);
    }

    public function create(Request $request)
    {
        $data = $request->validate([
            'g-recaptcha-response' => 'required|captcha'
    ]);

        Message::create($data);

        return redirect()->route('contact');
    }
}
