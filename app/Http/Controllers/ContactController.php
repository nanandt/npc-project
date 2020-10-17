<?php

namespace App\Http\Controllers;

use App\Message;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('pages.contact');
    }

    public function create(Request $request)
    {
      $data = $request->all();

      Message::create($data);

      return redirect()->route('contact');
    }
}
