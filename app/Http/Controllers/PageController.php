<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\ContactFormRequest;
use Mail;
use Carbon\Carbon;

class PageController extends Controller {

    private $dateTimeFormat = 'h:ia \\o\\n l F jS Y T'; //Ex: 12:00pm on January 1st 2015 EDT
    private $timeZone = 'America/New_York';

    public function home()
    {
        return view('home');
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }

    public function postContact(ContactFormRequest $request)
    {
        $email_message = array(
            'originalSendDatetime' => Carbon::now('America/New_York')->format($this->dateTimeFormat),
            'originalSender'       => $request->get('email'),
            'originalSubject'      => $request->get('subject'),
            'originalMessage'      => $request->get('message')
        );

        //Send User's Message as Email
        Mail::send('emails.contact_email', ['body' => $request->get('message')], function ($message) use ($request)
        {
            $message->from($request->get('email'));
            $message->to(env('MAIL_MYADDRESS'))->subject($request->get('subject'));
        });

        //Send User an Email Confirmation that their message was sent
        Mail::send('emails.email_confirmation', $email_message, function ($message) use ($request)
        {
            $message->from(env('MAIL_MYADDRESS'));
            $message->to($request->get('email'))->subject('Email sent confirmation!');
        });

        return redirect()->back()->with('success', 'Your message was successfully sent!');
    }

    public function projects()
    {
        return view('projects');
    }

    public function clubApp()
    {
        return view('projects.clubApp');
    }

    public function wheresmyspaceship()
    {
        return view('projects.wheresmyspaceship');
    }
}
