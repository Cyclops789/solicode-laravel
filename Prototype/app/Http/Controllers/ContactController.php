<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Mail\Message;
use Illuminate\Http\Request;
use Mail;

class ContactController extends Controller
{
    public function create()
    {
        return view('contact');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        Mail::to('test2@cyyc.lol', 'Receiver')->send(new Message($data));

        return redirect('/contact')->with('success', 'Your message has been sent.');
    }
}