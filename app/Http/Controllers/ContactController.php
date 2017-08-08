<?php

namespace App\Http\Controllers;

use App\Mail\ContactMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function show()
    {
        return view('front.contact.page');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
            'attendees' => 'numeric',
            'inquiry' => ''
        ]);

        Mail::to(['Pam @ Thorpe Lodge' => 'thorpelodgekzn@gmail.com'])->send(new ContactMessage($request->all()));

        if($request->ajax()) {
            return response()->json('ok');
        }

        return redirect('/');
    }
}
