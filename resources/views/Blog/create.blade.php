@extends('Abouts.layout')
@section('content')
 @extends('home')
<div class="card">
  <div class="card-header"><h2>Skills Page</h2></div>
  <div class="card-body">
      
      <form action="{{ route('blogs.store') }}" method="post" enctype="multipart/form-data">
        {!! csrf_field() !!}
        <label>Title</label></br>
        <input type="file" name="blog_image" id="name" class="form-control"></br>
        <label>Title</label></br>
        <input type="text" name="title" id="name" class="form-control"></br>
        <label>Content</label></br>
        <input type="text" name="content" id="email" class="form-control"></br>
        <button type="submit" class="btn btn-success">Submit</br>
    </form>
   
  </div>
</div>
 
@stop