@extends('employee.app')

@section('content')
   
<div >
        
        <div class="row" >

            <div >
                <div class="card" style="width: 100rem;" >
                    <div class="card-header">employees</div>
                    <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        <a href="{{ url('/employee/create') }}" class="btn btn-success btn-sm" title="Add New employee">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>
                        <br/>
                        <div class="table ">
                            <table class="table table-hover">
                                
                                <thead>
                                    <tr>
                                        <th>#</th>
                                     <th>nameAR</th><th>branch</th><th>nationalID</th><th>steteEMP</th><th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($employee as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->nameAR }}</td>
                                        <td>{{ $item->branch }}</td>
                                        <td>{{ $item->nationalID }}</td>
                                        <td>{{ $item->steteAMP }}</td>

                                        
                                        <td>
                                            <a href="{{ url('/employee/' . $item->id) }}" title="View Student"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/employee/' . $item->id . '/edit') }}" title="Edit Student"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                                            <form method="POST" action="{{ url('/employee' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete employee" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection