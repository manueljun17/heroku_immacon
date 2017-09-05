@extends('layouts.users')

@section('content')
	<h1>Edit User Information</h1>
	{!! Form::model($users,['method'=>'PATCH','route'=>['admin.users.update', $users->id]]) !!}

		@include('users.form', ['submitButtonText'=>'Update User'])

 	{!! Form::close() !!}
 	
 	@include('errors.list')

@endsection 