<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;
use Mail;

class ContactUsController extends Controller
{
    public function index(){

        return view('website.contact-us');
    }

    public function sendMessage(Request $request){
        $input = $request->all();

        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required|max:255'
        ]);

        // Mail::send('mails.contactus', ['nameInput'=>$input['name'], 'messageInput'=>$input['message']], function ($message) {
        //     $message->from('john@johndoe.com', 'John Doe');
        //     $message->sender('john@johndoe.com', 'John Doe');
        //     $message->to('john@johndoe.com', 'John Doe');
        //     $message->cc('john@johndoe.com', 'John Doe');
        //     $message->bcc('john@johndoe.com', 'John Doe');
        //     $message->replyTo('john@johndoe.com', 'John Doe');
        //     $message->subject('Contact Us');
        //     $message->priority(3);
        //     // $message->attach('pathToFile');
        // });
        return view('website.contact-us')->with('successMessage', 'Thank you! You message has been sent.');
        // dd($input);
    }
}
