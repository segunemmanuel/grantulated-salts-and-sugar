@extends('admin.index')

@section('edit_cat')
<div class="jumbotron">
    <div class="container">
    <h4 class="text-center">Add a new category </h4>
</div>
</div>
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

<div class="container">
    <div class="row">
        <div class="col-md-8">
<form>
    @csrf
    <div class="form-group">
        <label for="my-input">Category Name</label>
        <input id="my-input" class="form-control" value="{{$categories->title}}" name="cat_name" type="text">
        @error('cat_name')
<span class="text-danger"> {{$message}}</span>
@enderror
    </div>

    <div class="form-group">
        <label for="logo">Category Image</label>
        <input class="form-control" value="{{$categories->image}}"type="file" name="cat_image">
        @error('cat_image')
<span class="text-danger"> {{$message}}</span>
@enderror
    </div>
    

    <input type="submit" name="submit" class="btn btn-primary" id="">



</form>        
    </div>
</div>

</div>


@endsection