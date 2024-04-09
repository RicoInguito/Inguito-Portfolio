@extends('Abouts.layout')
@section('content')
    <div class="container">
        <div class="row">
 
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">
                        <h2>About</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ url('/about/create') }}" class="btn btn-success btn-sm" title="Add New About___">
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
                                        <th>Email</th>
                                        <th>Freelance</th>
                                        <th>Birthday</th>
                                        <th>Address</th>

                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($about as $abouts)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $abouts->name }}</td>
                                        <td>{{ $abouts->email }}</td>
                                        <td>{{ $abouts->freelance }}</td>
                                        <td>{{ $abouts->birthday }}</td>
                                        <td>{{ $abouts->address }}</td>
 
                                        <td>
                                            <a href="{{ url('/about/' . $abouts->id) }}" title="View About"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/about/' . $abouts->id . '/edit') }}" title="Edit About"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
 
                                            <form method="POST" action="{{ url('/about' . '/' . $abouts->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete About" onclick="return confirm"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                            
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <button type="back" class="btn btn-dark btn-sm" onclick="history.back()">Go Back</button>
                        </div>
 
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection