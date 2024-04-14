@extends('Abouts.layout')
@section('content')
 @extends('home')
<div class="card">
  <div class="card-header"><h2>About Page</h2></div>
  <div class="card-body">
      
      <form action="{{ url('about') }}" method="post">
        {!! csrf_field() !!}
        <label>Name</label></br>
        <input type="text" name="name" id="name" class="form-control"></br>
        <label>Email</label></br>
        <input type="text" name="email" id="email" class="form-control"></br>
        <label>Freelance</label></br>
        <input type="text" name="freelance" id="freelance" class="form-control"></br>
        <label>Birthday</label></br>
        <input type="date" name="birthday" id="birthday" class="form-control"></br>
        <label>Address</label></br>
        <input type="text" name="address" id="address" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop