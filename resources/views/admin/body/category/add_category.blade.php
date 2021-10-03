@extends('admin.index')

@section('post_cat')
<div class="jumbotron">
    <div class="container">
    <h4 class="text-center">Add a new category </h4>
</div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-8">
<form>
    <div class="form-group">
        <label for="my-input">Category Name</label>
        <input id="my-input" class="form-control" name="cat_name" type="text">
    </div>

    <div class="form-group">
        <label for="logo">Category Image</label>
        <input class="form-control" type="file" name="image">
    </div>
    

    <input type="submit" name="submit" class="btn btn-primary" id="">



</form>        
    </div>
</div>

</div>


@endsection