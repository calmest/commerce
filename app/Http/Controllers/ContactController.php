<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Mail\ContactEmail;
use App\Http\Requests\ContactFormRequest;
//use Session;
use App\Http\Controllers\flash;
use Mail;

class ContactController extends Controller
{
    public function create()
    {
        return view('contact.create');
    }

    public function store(Request $request)
    {
        $contact = [];

        $contact['name'] = $request->get('name');
        $contact['email'] = $request->get('email');
        $contact['subject'] = $request->get('subject');
        $contact['message'] = $request->get('message');

        // Mail delivery logic goes here
        //->with('flash_message_success', 'Password updated Successfully!');
        flash('Your message has been sent!')->success();

        //Mail::to(config('mail.support.address'))->send(new ContactEmail($contact));
        Mail::to($contact['email'])->send(new ContactEmail($contact));

        //return back()->with('flash_message_success', 'Your message has been sent successfully!');

        return redirect()->route('contact.create');

        //return back()->route('pages.contact.create');
    }
}
