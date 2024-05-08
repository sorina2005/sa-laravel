<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ContactController extends Controller
{
    public function contact(): View
    {
        return view('contact');
    }

    public function create(Request $request): \Illuminate\Http\RedirectResponse
    {
        $credentials = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required'
        ]);

        Contact::create($credentials);

        return redirect()->route('contact');
    }
}
