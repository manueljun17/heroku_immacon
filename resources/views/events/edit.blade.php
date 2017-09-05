@extends('layouts.event')

@section('content')
	<h1>Edit: {!! $events->name !!} </h1>
	{!! Form::model($events,['method'=>'PATCH','route'=>['admin.events.update', $events->id],'files' => true]) !!}

		@include('events.form', ['submitButtonText'=>'Update Events'])

 	{!! Form::close() !!}
 	
 	@include('errors.list')

@endsection 