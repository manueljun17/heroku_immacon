@extends('layouts.users')
@section('content')
<div>
<h1>User Management</h1>
<a class="btn btn-info" href="{{ route('admin.users.create') }}">Add Users</a>
{!! Form::open(['route' => 'admin.users', 'method' => 'GET', 'class' => 'form-inline', 'role' => 'search']) !!}

<div class="input-group">
    {!! Form::text('term', Request::get('term'), ['class' => 'form-control', 'placeholder' => 'Search...', 'id' => 'term']) !!}              
    <span class="input-group-btn">
    <button class="btn btn-default" type="submit">
        <i class="fa fa-search"></i>
    </button>
    </span>
</div>
{!! Form::close() !!}
</div>

@if ($users->count())
    <table class="table table-striped table-bordered table-responsive">
        <thead>
            <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>User</th>
                <th>Admin</th>
                <th></th>
                <!--<th></th>
                <th></th>-->
            </tr>
        </thead>

        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->first_name }}</td>
                    <td>{{ $user->last_name }}</td>
                    <td>{{ $user->email }}</td>
                    <!--<td><input disabled type="checkbox" {{ $user->hasRole('User') ? 'checked' : '' }} name="role_user"></td>
                    <td><input disabled type="checkbox" {{ $user->hasRole('Admin') ? 'checked' : '' }} name="role_admin"></td>-->
                    <td>
                        <a class="btn btn-info" href="{{ route('admin.users.show',array($user->id)) }}">Show</a>
                    </td>
                    <td>
                        <a class="btn btn-success" href="{{ route('admin.users.edit',array($user->id)) }}">Edit</a>
                    </td>
                    <td>{{ Form::open(array('route' => array('admin.users.destroy', $user->id), 'method' => 'delete')) }}
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Do you really want to delete this information?')">Delete</button>
                        {{ Form::close() }}</td>
                </tr>
            @endforeach
        </tbody>
      
    </table>
    <div class="text-center">
    <nav>
      {!! $users->appends( Request::query() )->render() !!}
    </nav>
  </div>
@else
    There are no Users info
@endif
@stop