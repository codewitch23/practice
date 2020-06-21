<?php

namespace App\Http\Controllers;

The Ultimate Advanced Laravel Pro course
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\Contact;
use PharIo\Manifest\Email;

class ContactController extends Controller
{

    public function index()
    {
        //
    }

    public function create()
    {
        //
    }


    public function store()
    {
        \request()->validate(['email'=>'required|email']);
//        Mail::raw('this is new ',function ($message){
//            $message->to(\request('email'));
//        });
        Mail::to(\request('email'))
            ->send(new Contact());
        return \redirect('/contact')->with('message','Email sent');
    }


    public function show(Contact $contact)
    {
        return view('contact');
    }


    public function edit(Contact $contact)
    {
        //
    }


    public function update(Request $request, Contact $contact)
    {

    }


    public function destroy(Contact $contact)
    {
        //
    }
}
