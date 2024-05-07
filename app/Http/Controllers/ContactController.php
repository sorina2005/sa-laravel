<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contact()
    {
        return view('contact');
    }

    public function create(Request $request)
    {
        $credentials = $request->validate([
            'first_name'       => 'required',
            'last_name'        => 'required',
            'email'            => 'required|email',
            'subject'          => 'required',
            'message'          => 'required'
        ]);
        $contact = Contact::create($credentials);
        return redirect()->route('contact');
    }
}
