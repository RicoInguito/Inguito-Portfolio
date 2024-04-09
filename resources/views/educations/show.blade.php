@extends('educations.layout')
@section('content')
 
 
<div class="card">
  <div class="card-header"><b><h3>Educations Page</h3></b></div>
  <div class="card-body">
        <div class="card-body">
        <p class="card-text"><b>Grade Level</b> : {{ $educations->grade_level }}</p>
        <p class="card-text"><b>Year</b> : {{ $educations->year }}</p>
        <p class="card-text"><b>School</b> : {{ $educations->school }}</p>

  </div>
       
    </hr>
  
  </div>
</div>