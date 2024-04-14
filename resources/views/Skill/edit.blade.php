@extends('Abouts.layout')
@section('content')
@extends('home')
 
<div class="card">
  <div class="card-header"><h2>Skills Page</h2></div>
  <div class="card-body">
      
      <form action="{{ route('skills.update', $skills->id)}}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$skills->id}}" id="id" />
        <label>Name</label></br>
        <input type="text" name="name" id="name" value="{{$skills->name}}" class="form-control"></br>
        <label>Email</label></br>
        <input type="text" name="percentage" id="email" value="{{$skills->percentage}}" class="form-control"></br>
       
        <button type="submit"  class="btn btn-success" >Submit</button>     |   <button type="back" class="btn btn-dark btn-sm" onclick="history.back()">Go Back</button>
    </form>
    
  </div>
</div>
 
@stop