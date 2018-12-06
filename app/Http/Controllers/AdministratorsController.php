<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use Auth;

class AdministratorsController extends Controller
{
    use AuthenticatesUsers;

    //protected $loginView = 'administrators.login';
    //protected $guard = 'admins';

    public function loginForm()
    {
        return view('administrators.login');
    }

    public function loginAdmin(Request $request)
    {
        // Validate the form data
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:6'
        ]);
        // Attempt to log the user in
        if (Auth::guard('admins')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
            // if successful, then redirect to their intended location
            return redirect()->intended(route('home'));
        }
        // if unsuccessful, then redirect back to the login with the form data
            return redirect()->back()->with('error','Usuario o contraseña invalido');
            //return redirect()->back()->withInput($request->only('email', 'remember'));
            //return $this->sendFailedLoginResponse($request);
    }

    public function logout(Request $request)
    {
        Auth::guard('admins')->logout();
        $request->session()->invalidate();
        return redirect('/');
    }

    public function authenticated(Request $request, $user)
    {
        /*if ( $user->isAdmin() ) {// do your margic here
            return redirect()->route('dashboard');
        }

        return redirect('/home');*/

        switch ($guard) {
            case 'admin':
                if (Auth::guard($guard)->check()) {
                    return redirect()->route('/home');
                }
                break;
            default:
                /*if (Auth::guard($guard)->check()) {
                    return redirect('/home');
                }*/
                return redirect('/');
            break;
        }
    }

    /**
     * Get the failed login response instance.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Symfony\Component\HttpFoundation\Response
     *
     * @throws \Illuminate\Validation\ValidationException
     *//*
    protected function sendFailedLoginResponse(Request $request)
    {
        throw ValidationException::withMessages([
            $this->username() => [trans('auth.failed')],
        ]);
    }*/
}
