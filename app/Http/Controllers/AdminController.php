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
            'job_title' => 'required|unique:jobs|max:255',
            'job_desc' => 'required',
            'job_employer' => 'required',
            'job_logo' => 'required',
            'job_type' => 'required',
            'job_salary' => 'required',
            'location' => 'required'
        ]);




    }

public function AddCat(){
    return view('admin.body.category.add_category');
}



}
