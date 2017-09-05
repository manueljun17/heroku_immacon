@extends('layouts.event')
@section('content')
    @if( auth()->check())
        @if( auth()->user()->hasRole('Admin'))
            @include('events.admin.index')
        @else
            @include('events.visitor.index')
        @endif
    @else
        @include('events.visitor.index')
    @endif
@stop
