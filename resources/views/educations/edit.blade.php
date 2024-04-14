@extends('Abouts.layout')
@section('content')
@extends('home')
 
<div class="card">
  <div class="card-header"><h2>Educations Page</h2></div>
  <div class="card-body">
      
      <form action="{{ route('education.update', $educations->id)}}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$educations->id}}" id="id" />
        <label>School</label></br>
        <input type="text" name="school" id="name" value="{{$educations->school}}" class="form-control"></br>
        <label>School Address</label></br>
        <input type="text" name="school_address" id="email" value="{{$educations->school_address}}" class="form-control"></br>
        <label>School Year</label></br>
        <input type="year" name="school_year" id="email" value="{{$educations->school_year}}" class="form-control"></br>
       
        <button type="submit"  class="btn btn-success" >Submit</button>     |   <button type="back" class="btn btn-dark btn-sm" onclick="history.back()">Go Back</button>
    </form>
    
  </div>
</div>
 
@stop