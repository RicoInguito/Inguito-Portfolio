@extends('Abouts.layout')
@section('content')
 
<div class="card">
  <div class="card-header"><h2>About Page</h2></div>
  <div class="card-body">
      
      <form action="{{ url('about/' .$about->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$about->id}}" id="id" />
        <label>Name</label></br>
        <input type="text" name="name" id="name" value="{{$about->name}}" class="form-control"></br>
        <label>Email</label></br>
        <input type="text" name="email" id="email" value="{{$about->email}}" class="form-control"></br>
        <label>Freelance</label></br>
        <input type="text" name="freelance" id="freelance" value="{{$about->freelance}}" class="form-control"></br>
        <label>Birthday</label></br>
        <input type="text" name="birthday" id="birthday" value="{{$about->birthday}}" class="form-control"></br>
        <label>Address</label></br>
        <input type="text" name="address" id="address" value="{{$about->address}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success">    |   <button type="back" class="btn btn-dark btn-sm" onclick="history.back()">Go Back</button>
    </form>
    
  </div>
</div>
 
@stop