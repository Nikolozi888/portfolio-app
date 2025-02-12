<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Mail\ReplyMail;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function store($id, Request $request)
    {
        $contact = Contact::find($id);

        if (!$contact) {
            return redirect()->route('admin.emails.index')->with([
                'message' => 'Contact not found',
                'type' => 'error'
            ]);
        }

        $request->validate([
            'body' => 'required|string',
        ]);

        Mail::to($contact->email)->send(new ReplyMail([
            'from' => auth()->user()->email,
            'to' => $contact->name,
            'body' => $request->body,
        ]));

        $contact->replied = 1;
        $contact->save();

        $message = array('message' => 'Email Sent Successfully', 'type' => 'success');
        return redirect()->route('admin.emails.index')->with($message);
    }

}
