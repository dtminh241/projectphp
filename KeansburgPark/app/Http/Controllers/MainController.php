<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function showHomePage(Request $request){
        return view('main');
    }
}
