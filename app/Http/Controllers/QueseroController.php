<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Quesero;
use App\Http\Requests\QueseroRequest;

class QueseroController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->redirectTo = 'queseros.login';
        $this->middleware('auth:queseros');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return "You're logged in ";
        return view('Quesero.index');
    }
}
