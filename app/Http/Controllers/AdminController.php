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
        $validated = $request->validate([
            'title' => 'required|unique:jobs|max:255',
            'description' => 'required',
            'employer' => 'required',
            'logo' => 'required',
            'type' => 'required',
            'salary' => 'required',
            'category_id' => 'required',
            'location' => 'required'
        ]);




    }
}
