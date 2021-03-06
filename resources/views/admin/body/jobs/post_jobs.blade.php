@extends('admin.index')

@section('post_jobs')
<div class="jumbotron">
    <div class="container">
        
    <h4 class="text-center">Add jobs here</h4>
 

</div>
</div>

<div class="card">
    <div class="card">
        @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong> {{ session('success')}}</strong> 
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        @endif
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-8">

<form action="{{url('store.jobs')}}" method="POST">
    @csrf
    <div class="form-group">
        <label for="my-input">Title</label>
        <input id="my-input" class="form-control" name="job_title" type="text">
    </div>
    
    <div class="form-group">
        <label for="my-input">Description</label>
        <textarea class="form-control" name="job_desc" id="" cols="30" rows="10"></textarea>
    </div>

    <div class="form-group">
        <label for="my-input">Employer logo</label>
<input type="text" name="job_logo" class="form-control">
    </div>
    <div class="form-group">
        <label for="my-input">Location</label>
        <input id="my-input" name="job_location" class="form-control" type="text">
    </div>
    {{-- <div class="form-group">
        <label for="my-input">Category</label>
        <select  class="form-control" id="">
            @foreach ($categories as $cat)
            <option name="function_count[{!! $cat->id !!}]">{{$cat->title}}</option>
            @endforeach
        </select>
    </div> --}}

    <div class="form-group">
        <label for="my-input">Cat</label>
        <input id="my-input" class="form-control" type="text" name="category_id">
    </div>
    
    <div class="form-group">
        <label for="my-input">Type</label>
<select name="job_type" id="" class="form-control">
<option value="">Remote</option>
<option value="">Fulltime</option>
<option value="">Part-time</option>
</select>
    </div>
    
    <div class="form-group">
        <label for="my-input">Salary</label>
        <input id="my-input" name="job_salary" class="form-control" type="text">
    </div>
    <div class="form-group">
        <label for="my-input">Employer</label>
        <input id="my-input" name="job_employer" class="form-control" type="text">
    </div>
    <input type="submit" name="submit" class="btn btn-primary" id="">
</form>        
    </div>
</div>

</div>


@endsection