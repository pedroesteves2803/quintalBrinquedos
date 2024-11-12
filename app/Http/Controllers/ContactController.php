<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function __invoke(ContactRequest $request)
    {
        $data = $request->validated();

        $contact = new Contact();
        $contact->subject_type = $data['subject'];
        $contact->name = $data['first_name'];
        $contact->surname = $data['last_name'];
        $contact->phone = $data['phone'];
        $contact->email = $data['email'];
        $contact->message = $data['message'];
        $contact->save();

        return redirect()->route('home')->with('success', 'Mensagem enviada com sucesso!');
    }
}
