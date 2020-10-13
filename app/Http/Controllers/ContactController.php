<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Mail;

class ContactController extends Controller
{
    // Create Contact Form
    public function index(Request $request) { //createForm
        return view('welcome');
    }

    // Store Contact Form data
    public function ContactSubmit(Request $request) { //ContactUsForm

        // Form validation
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'subject'=>'required',
            'message' => 'required'
            ]);

        //  Store data in database. If the website is uploaded on GitHub Pages, a database cannot be used, hence the database storing action should stay commented-out.
        // Contact::create($request->all());

        //  Send mail to admin
        \Mail::send('mail', array(
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'subject' => $request->get('subject'),
            'user_query' => $request->get('message'),
        ), function($message) use ($request){
            $admin_email = 'kiriakostriadafillidis@gmail.com';
            // $admin_email suggests the email address to which the contact form emails are sent to
            $message->from($request->email);
            $message->to($admin_email, 'Admin')->subject($request->get('subject'));
        });

        // 
        return back()->with('success', 'Thank you for contacting me. I will reach out to you soon !');
        // return back()->with('success', 'Thank you for contacting me. I will reach out to you soon !');
    }
}
