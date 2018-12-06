<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use Auth;

class AuthQueseroController extends Controller
{
    use AuthenticatesUsers;

    //protected $loginView = 'administrators.login';
    //protected $guard = 'admins';

    public function loginForm()
    {
        return view('Quesero.login');
    }

    public function loginQueso(Request $request)
    {
        // Validate the form data
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required|min:6'
        ]);
        // Attempt to log the user in
        if (Auth::guard('queseros')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
            // if successful, then redirect to their intended location
            return redirect()->intended(route('Quesero.index'));
        }
        // if unsuccessful, then redirect back to the login with the form data
            return redirect()->back()->with('error','Usuario o contraseña invalido');
            //return redirect()->back()->withInput($request->only('email', 'remember'));
            //return $this->sendFailedLoginResponse($request);
    }
}
