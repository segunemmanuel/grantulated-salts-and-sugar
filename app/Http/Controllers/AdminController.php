<?php
namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

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


public function StoreCat(Request $request){
    $validated= $request->validate([
        'cat_name' => 'required',
        'cat_image' => 'required|mimes:jpg,jpeg,gif,png',
    ],
    [ 
        'cat_name.required'=>'Pls enter a name',
        'cat_image.min'=>'Brand longer than 4 chars',
    ]);

    // Upload images
    $cat_image=$request->file('cat_image');
    $name_generate=hexdec(uniqid()). '.'.$cat_image->getClientOriginalExtension();
    $destinationPath = base_path('public/cat/images/');
$cat_image->move($destinationPath, $name_generate);

    Category::insert([
        'title'=>$request->cat_name,
        'image'=>$name_generate,
        'created_at'=> Carbon::now()
    ]);

    return Redirect()->back()->with('success','Inserted succesffully');



}

public function ViewCat(){
    $categories=Category::latest()->paginate(5);
    return view('admin.body.category.view_category',compact('categories'));
}
}
