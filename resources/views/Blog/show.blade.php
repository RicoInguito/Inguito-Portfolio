@extends('Abouts.layout')
@section('content')
<div class="card">
  <div class="card-header"><h2>Blog Page</h2></div>
  <div class="card-body">
   
 
        <div class="card-body">
        <h5 class="card-title">Blog Image :  <br>
        <img style="width: 100px; height: 60px;" src="{{ asset('storage/'. $blogs->blog_image) }}"/></h5>
        <p class="card-text">Title : {{ $blogs->title }}</p>
        <p class="card-text">Content : {{ $blogs->content }}</p>
      
  </div>
       
    </hr>
  
  </div>
</div>