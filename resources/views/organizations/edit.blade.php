@extends('layouts.organizations')

@section('content')
	<h1>Edit: {!! $organizations->name !!} </h1>
	{!! Form::model($organizations,['method'=>'PATCH','route'=>['admin.organizations.update', $organizations->id],'files' => true]) !!}

		@include('organizations.form', ['submitButtonText'=>'Update Organizations'])

 	{!! Form::close() !!}
 	
 	@include('errors.list')

@endsection 