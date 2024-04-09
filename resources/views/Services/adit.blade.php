@extends('Services.layout')
@section('content')
 
<div class="card">
  <div class="card-header">Service Page</div>
  <div class="card-body">
      
      <form action="{{ url('service/' .$service->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$service->id}}" id="id" />
        <label>Web Design</label></br>
        <input type="text" name="web_design" id="web_design" value="{{$service->name}}" class="form-control"></br>
        <label>Web Development</label></br>
        <input type="text" name="web_development" id="web_development" value="{{$service->address}}" class="form-control"></br>
        <label>Graphic Design</label></br>
        <input type="text" name="graphic_design" id="graphic_design" value="{{$service->mobile}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop