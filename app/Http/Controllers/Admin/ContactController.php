<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index() {
        $emails = Contact::latest()->paginate(20);

        return view('admin.mails.index', compact('emails'));
    }

    public function replied() {
        $repliedEmails = Contact::where('replied', '1')->paginate(20);

        return view('admin.mails.index', compact('repliedEmails'));
    }

    public function show($id) {

        $contact = Contact::find($id);

        return view('admin.mails.show', compact('contact'));
    }
}
