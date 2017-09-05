@extends('layouts.config')

@section('content')
	<h1>Edit: {!! $configs->name !!} </h1>
	{!! Form::model($configs,['method'=>'PATCH','route'=>['admin.configs.update', $configs->id],'files' => true]) !!}

		@include('config.form', ['submitButtonText'=>'Update Configs'])

 	{!! Form::close() !!}
 	
 	@include('errors.list')

@endsection 