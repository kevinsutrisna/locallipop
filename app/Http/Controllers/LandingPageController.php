<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class LandingPageController extends Controller
{
    public function showInfo(){
        if (Auth::check()) {
            return view('dashboard');
        }
        return view('layouts/landingpage');
    }

    public function showInfo2(){
        return view('dashboard');
    }
}
