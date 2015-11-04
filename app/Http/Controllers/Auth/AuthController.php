<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Auth\Guard;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;


    protected $redirectPath = '/dashboard';

    protected $auth;

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct(Guard $auth)
    {
        $this->auth = $auth;
        $this->middleware('guest', ['except' => 'getLogout']);
    }

    /**
     * Show the login page
     *
     * @return \Illuminate\View\View
     */
    public function getLogin()
    {

        return view('auth.login');
    }

    /**
     * Allow the owner to log in to the portfolio
     *
     * @param Request $request
     */
    public function postLogin(Request $request)
    {
        $this->validate($request, [
            'username' => 'required',
            'password' => 'required'
        ]);

        $credentials = $request->only('username', 'password');

        if ($this->auth->attempt($credentials, $request->has('remember'))) {
            return redirect()->intended($this->redirectPath());
        }
        dd($credentials);
        return redirect($this->loginPath())
            ->withInput($request->only('username', 'password'))
            ->withErrors([
                'username' => $this->getFailedLoginMessage()
            ]);
    }

}
