@extends('Abouts.layout')
@section('content')
 
<div class="card">
  <div class="card-header"><h2>Educations Page</h2></div>
  <div class="card-body">
   
 
        <div class="card-body">
        <h5 class="card-title">School : {{ $educations->school }}</h5>
        <p class="card-text">School Address : {{ $educations->school_addres }}</p>
        <p class="card-text">School Year : {{ $educations->school_year }}</p>
  </div>
       
    </hr>
  
  </div>
</div>