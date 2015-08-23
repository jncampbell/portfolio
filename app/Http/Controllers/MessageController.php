<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ContactFormRequest;
use App\Http\Requests;
use App\Contact;
use App\Message;
use Mail;
use DB;

class MessageController extends Controller
{
    protected $contact;
    protected $message;

    /**
     * @param Contact $contact
     * @param Message $message
     */
    public function __construct(Contact $contact, Message $message)
    {
        $this->contact = $contact;
        $this->message = $message;
    }

    /**
     * Show the contact page
     *
     * @return \Illuminate\View\View
     */
    public function contact()
    {
        return view('contact');
    }

    /**
     * Process the contact form
     *
     * @param ContactFormRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function postContact(ContactFormRequest $request)
    {
        $contact = $this->contact->firstOrCreate([
            'email' => $request->get('email')
        ]);

        $message = $this->message->create([
            'contact_id' => $contact->id,
            'subject'    => $request->get('subject'),
            'body'       => $request->get('message')
        ]);

        Mail::send('emails.contact_email', ['body' => $message], function ($email) use ($message)
        {
            $email->from($message->contact->email);
            $email->to(env('MAIL_MYADDRESS'))->subject($message->subject);
        });

        Mail::send('emails.email_confirmation', ['email' => $message], function ($email) use ($message)
        {
            $email->from(env('MAIL_MYADDRESS'));
            $email->to($message->contact->email)->subject('Email sent confirmation!');
        });

        return redirect()->back()->with('success', 'Your message was successfully sent!');
    }

}
