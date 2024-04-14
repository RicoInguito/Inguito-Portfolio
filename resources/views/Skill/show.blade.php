@extends('Abouts.layout')
@section('content')
 
<div class="card">
  <div class="card-header"><h2>Skills Page</h2></div>
  <div class="card-body">
   
 
        <div class="card-body">
        <h5 class="card-title">Name : {{ $skills->name }}</h5>
        <p class="card-text">Percentage : {{ $skills->percentage }}</p>
      
  </div>
       
    </hr>
  
  </div>
</div>