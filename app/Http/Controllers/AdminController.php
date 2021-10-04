<?php
namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Jobs;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Symfony\Component\Console\Input\Input;



class AdminController extends Controller
{
    //

    public function Dashboard(){
        return view('admin.body.dashboard');
    }

    public function AddJob(){
    $categories=DB::table('categories')->get();
        return view('admin.body.jobs.post_jobs',compact('categories'));
    }


    public function StoreJobs(Request $request){
        // $validated = $request->validate([
        //     'job_title' => 'required',
        //     'job_desc' => 'required',
        //     'job_employer' => 'required',
        //     'job_logo' => 'required',
        //     'job_type' => 'required',
        //     'job_salary' => 'required',
        //     'location' => 'required',
        //     'job_category'=>'required'

        // ]);

Jobs::insert([
'title'=>$request->job_title,
// 'description'=>$request->job_desc,
// 'employer'=>$request->job_employer,
// 'logo'=>$request->job_logo,
// 'location'=>$request->location,
// 'type'=>$request->job_type,
// 'salary'=>$request->job_salary,
// 'category_id'=>$request->input('function_count'),
// 'created_at'=> Carbon::now()

]);

return Redirect()->back()->with('success','inserted succesfully');


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
    $destinationPath = base_path('public');
$cat_image->move($destinationPath, $name_generate);

    Category::insert([
        'title'=>$request->cat_name,
        'image'=>$name_generate,
        'created_at'=> Carbon::now()
    ]);

    return Redirect()->route('view.category')->with('success','Inserted succesffully');



}

public function ViewCat(){
    $categories=Category::latest()->paginate(5);
    return view('admin.body.category.view_category',compact('categories'));
}
public function DelCat($id){
    Category::find($id)->delete();
return Redirect()->back()->with('success','Deleted  succesfully');


}


public function EditCat($id){
    $categories=Category::find($id);
    return view('admin.body.category.edit_category',compact('categories'));
}

}
