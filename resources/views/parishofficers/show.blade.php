@extends('layouts.parishofficer')

@section('content')
    <h4>Name: {{ $parishofficers->name }} </h4>
    <img id="myProfile" src="{{ asset($parishofficers->user_image) }}" width="150px" height="150px"></img>
	
    <h4>Position: {{ $parishofficers->position }} </h4>
	<article>
		<h4>Description: {{ $parishofficers->description }}</h4>
	</article>
	@if( auth()->check())
		@if( auth()->user()->hasRole('Admin'))
			<a class="btn btn-info" href="{{ route('admin.parishofficers') }}">Back</a>
		@endif
	@endif
@stop