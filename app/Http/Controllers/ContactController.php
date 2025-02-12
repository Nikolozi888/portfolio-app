<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactForm;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index() {
        return view('user.contact');
    }

    public function store(ContactForm $request) {

        $attributes = $request->validated();

        Contact::create($attributes);

        $message = array('message' => 'Contact Submit Successfully', 'type' => 'success');

        return redirect()->route('home')->with($message);

    }
}
