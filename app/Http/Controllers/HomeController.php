<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //

    public function Blog(){
    	return view('home.body.blog');
    }



    public function About(){
    	return view('home.body.about');
    }


    public function Contact(){
    	return view('home.body.contact');
    }

    public function Listing(){
    	return view('home.body.listing');
    }

    public function Single_blog(){
    	return view('home.body.single_blog');
    }


}
