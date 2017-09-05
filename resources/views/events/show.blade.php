@extends('layouts.event')

@section('content')
    @if( auth()->check())
        @if( auth()->user()->hasRole('Admin'))
            @include('events.admin.show')
        @else
            @include('events.user.show')
        @endif
    @else
        @include('events.visitor.show')
    @endif

@stop