<?php

namespace App\Http\Controllers\Admin;

use App\Events\ReplyEmailEvent;
use App\Http\Controllers\Controller;
use App\Mail\ReplyMail;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function store($id, Request $request)
    {
        $contact = Contact::findOrFail($id);

        $validated = $request->validate([
            'body' => 'required|string',
        ]);

        event(new ReplyEmailEvent(
            $contact,
            $validated['body'],
            current_user()->email
        ));

        $contact->update(['replied' => true]);

        $message = 'Email Sent Successfully';
        return $this->successRedirect('admin.emails.index', $message);
    }

}
