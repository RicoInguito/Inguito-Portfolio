@extends('Services.layout')
@section('content')
 
 
<div class="card">
  <div class="card-header">Service Page</div>
  <div class="card-body">
   
 
        <div class="card-body">
        <p class="card-title"><b>Web Design</b> : {{ $service->web_design }}</p>
        <p class="card-text"><b>Web Development</b> : {{ $service->web_development }}</p>
        <p class="card-text"><b>Graphic Design</b> : {{ $service->graphic_design }}</p>
  </div>
       
    </hr>
  
  </div>
</div>