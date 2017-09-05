@extends('layouts.users')

@section('content')
	<h1> Users Information</h1>
    <h4>Full Name: {{ $users->first_name }} {{ $users->last_name }}  </h4>
	
	<article>
		<h4>Email: {{ $users->email }}</h4>
        <div>User: <input disabled type="checkbox" {{ $users->hasRole('User') ? 'checked' : '' }} name="role_user"></div>
        <div>Admin: <input disabled type="checkbox" {{ $users->hasRole('Admin') ? 'checked' : '' }} name="role_admin"></div>
	</article>
	<a class="btn btn-info" href="{{ route('admin.users') }}">Back</a>
@stop