<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request; 
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

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
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('guest:admin')->except('logout');
    }


    public function showAdminLoginForm()
    {
        return view('auth.login');
    }


    public function adminLogin(Request $request)
    {
        $this->validate($request, [
            'user_id'   => 'required|exists:admins,user_id',
            'password' => 'required|min:6'
        ]);

        $auth = $request->only('user_id', 'password');
      
        if (auth()->guard('admin')->attempt($auth)) {
            return redirect()->intended(route('admin.home'));
        }
        return redirect()->back()->with(['error' => 'User_ID / Password Salah']);
    }


    public function logout()
    {
        auth()->guard('admin')->logout();
        return redirect(route('admin.login'));
    }

}
