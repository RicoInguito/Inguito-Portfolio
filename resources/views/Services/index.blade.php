@extends('Services.layout')
@section('content')
    <div class="container">
        <div class="row">
 
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">
                        <h2>Services</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ url('/service/create') }}" class="btn btn-success btn-sm" title="Add New Student">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Web Design</th>
                                        <th>Web Development</th>
                                        <th>Graphic Design</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($service as $Services)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $Services->web_design }}</td>
                                        <td>{{ $Services->web_development }}</td>
                                        <td>{{ $Services->graphic_design }}</td>
 
                                        <td>
                                            <a href="{{ url('/service/' . $Services->id) }}" title="View Student"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/service/' . $Services->id . '/edit') }}" title="Edit Student"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
 
                                            <form method="POST" action="{{ url('/service' . '/' . $Services->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Student" onclick="return confirm"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
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