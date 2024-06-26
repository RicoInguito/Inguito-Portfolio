@extends('Skill.layout')
@extends('home')
@section('content')
    <div class="container">
        <div class="row">
 
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">
                        <h2>Skills</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ route('skills.create')}}" class="btn btn-success btn-sm" title="Add New About___">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Percentage</th>

                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($skills as $sk)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $sk->name }}</td>
                                        <td>{{ $sk->percentage }}%</td>
                                        
 
                                        <td>
                                            <a href="{{ route('skills.show', $sk->id) }}" title="View About"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ route('skills.edit', $sk->id) }}" title="Edit About"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
 
                                            <form method="POST" action="{{route('skills.destroy', $sk->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete About" onclick="return confirm"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                            
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <!-- <a type="back" class="btn btn-dark btn-sm" href="{{route('about.index')}}">Go Back</a> -->
                        </div>
 
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection