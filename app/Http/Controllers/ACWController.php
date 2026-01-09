<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ACW;

class ACWController extends Controller
{
    public function showInfo(){
        return view('artcraftworkshop');
    }
}
