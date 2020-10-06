<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Http\Response;
class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/custorder';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('guest:cust')->except('logout');
    }

    public function showCustLoginForm()
    {
        return view('auth.login', ['url' => 'custorder']);
    }

    public function showCustLoginForm2()
    {
        return view('auth.login', ['url' => 'cust']);
    }

    public function custLogin(Request $request)
    {
     
    
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:6'
        ]);

        if (Auth::guard('cust')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {

            return redirect()->intended('/cust');
        }
        return back()->withInput($request->only('email', 'remember'));
    }

    public function logout(Request $request)  {
        $this->guard()->logout();

        $request->session()->invalidate();

        return redirect('homepage');
 }
}
