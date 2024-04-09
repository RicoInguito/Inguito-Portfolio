@extends('Abouts.layout')
@section('content')
 
 
<div class="card">
  <div class="card-header"><h2>About Page</h2></div>
  <div class="card-body">
   
 
        <div class="card-body">
        <h5 class="card-title">Name : {{ $about->name }}</h5>
        <p class="card-text">Email : {{ $about->email }}</p>
        <p class="card-text">Freelance : {{ $about->freelance }}</p>
        <p class="card-text">Birthday : {{ $about->birthday }}</p>
        <p class="card-text">Address : {{ $about->address }}</p>
  </div>
       
    </hr>
  
  </div>
</div>