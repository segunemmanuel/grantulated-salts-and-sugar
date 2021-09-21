<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //

    public function Blog(){
    	return view('home.body.blog')
    }
}
