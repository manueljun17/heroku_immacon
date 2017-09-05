@extends('layouts.organizations')

@section('content')
	<h1> Organizations Information</h1>
    <h4>Name: {{ $organizations->name }} </h4>
	
	<article>
		<h4>Description: {!! $organizations->description !!}</h4>
	</article>
	
@stop