<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Visitor;

class PageController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth', ['only' => 'dashboard']);
    }
    /**
     * Show the home page
     *
     * @return \Illuminate\View\View
     */
    public function home(Request $request)
    {
        $visitor = new Visitor;
        $visitor->ip = $request->ip();
        $visitor->storeIPAddress();
        return response()->view('home');
    }

    /**
     * Show the projects index page
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
     * Show the timer app showcase
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
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

    /**
     * Show the dashboard page
     *
     * @param Guard $auth
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function dashboard(Guard $auth)
    {
        return view('dashboard', ['user' => $auth->user(), 'recentVisitors' => Visitor::countRecent()]);
    }
}
