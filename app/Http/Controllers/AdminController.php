<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //

    public function Dashboard(){
        return view('admin.body.dashboard');
    }

    public function AddJob(){
        return view('admin.body.jobs.post_jobs');
    }




    public function StoreJobs(Request $request){
        
        return view('admin.body.jobs.post_jobs');
    }
}
