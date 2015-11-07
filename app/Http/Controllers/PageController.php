<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;

class PageController extends Controller {

    private $dateTimeFormat = 'h:ia \\o\\n l F jS Y T'; //Ex: 12:00pm on January 1st 2015 EDT

    /**
     * Show the home page
     *
     * @return \Illuminate\View\View
     */
    public function home()
    {
        return view('home');
    }

    /**
     * Show the projects page
     *
     * @return \Illuminate\View\View
     */
    public function projects()
    {
        return view('projects');
    }

    /**
     *
     * Show the club app showcase
     *
     * @return \Illuminate\View\View
     */
    public function clubApp()
    {
        return view('projects.clubApp');
    }

    /**
     *
     * Show the blog showcase
     *
     * @return \Illuminate\View\View
     */
    public function wheresmyspaceship()
    {
        return view('projects.wheresmyspaceship');
    }

    public function timer()
    {
        return view('projects.timer');
    }

    /**
     * Show the about page
     *
     * @return \Illuminate\View\View
     */
    public function about()
    {
        return view('about');
    }

    public function dashboard()
    {
        return view('dashboard');
    }
}
