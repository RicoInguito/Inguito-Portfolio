@extends('Abouts.layout')
@section('content')
 @extends('home')
<div class="card">
  <div class="card-header"><h2>Blogs Page</h2></div>
  <div class="card-body">
      
      <form action="{{ route('blogs.update', $blogs->id)}}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$blogs->id}}" id="id" />
        <label>Name</label></br>
        <input type="text" name="blog_image" id="name" value="{{$blogs->blog_image}}" class="form-control"></br>
        <label>Title</label></br>
        <input type="text" name="title" id="email" value="{{$blogs->title}}" class="form-control"></br>
        <label>Content</label></br>
        <input type="text" name="percentage" id="email" value="{{$blogs->content}}" class="form-control"></br>
       
        <button type="submit"  class="btn btn-success" >Submit</button>     |   <button type="back" class="btn btn-dark btn-sm" onclick="history.back()">Go Back</button>
    </form>
    
  </div>
</div>
 
@stop