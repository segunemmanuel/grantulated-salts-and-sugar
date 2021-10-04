@extends('admin.index')
@section('view_cat')
<div class="jumbotron">
    <div class="container">
    <h4 class="text-center">View  category </h4>
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
        <div class="col-md-12">
            <table class="table table-striped table-dark">
                <thead>
                  <tr>
                    <th scope="col">S/N</th>
                    <th scope="col">Category Title</th>
                    <th scope="col">Date</th>
                    <th scope="col">Image</th>
                    <th scope="col">Action</th>

                  </tr>
                </thead>
                <tbody>
                    @foreach ( $categories as $category )
                  <tr>
                    <th scope ="row"> {{ $categories->firstItem()+ $loop->index}}</th>
                    <td>{{$category->title}}</td>
                    <td>
                        @if($category->created_at==NULL)
                        <span class="text-danger">No date set </span>
                        @else
                        {{ Carbon\Carbon::parse($category->created_at)->diffForHumans() }}
                        @endif
                        </td>
                        
                    <td><img src="{{asset( $category->image )}}" width="90px" height="60px" alt=""></td>
                </td>
                <td><a href="{{url('category/edit/'.$category->id)}}" class="btn btn-info">Edit</a> 
                <a href="{{url('category/delete/'.$category->id)}}" onclick="return confirm('Are you sure to delete')" class="btn btn-danger">Delete</a>
                
                </td> 
                  </tr>
                  @endforeach

                </tbody>
              </table>

              <nav aria-label="Page navigation">
                {{ $categories->links()}}
              
              </nav>
    </div>
</div>

</div>


@endsection