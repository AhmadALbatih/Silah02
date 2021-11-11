@extends('User.app')

@section('content')
   
<div >
        
        <div class="row" >

            <div >
                <div class="card" style="width: 100rem;" >
                    <div class="card-header">User</div>
                    <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        <a href="{{ url('/User/create') }}" class="btn btn-success btn-sm" title="Add New User">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New </a><br/>
                        <div class="table ">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                     <th>name</th><th>email</th><th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($User as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->email }}</td>
                                        

                                        
                                        <td>
                                            <a href="{{ url('/User/' . $item->id) }}" title="View Student"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/User/' . $item->id . '/edit') }}" title="Edit Student"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                                            <form method="POST" action="{{ url('/User' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete User" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
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
 