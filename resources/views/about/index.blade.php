@extends('layouts.about')
@section('content')


    @if( auth()->check())
        @if( auth()->user()->hasRole('Admin'))
            @include('about.admin.index')
        @else
            @include('about.visitor.index')
        @endif
    @else
        @include('about.visitor.index')
    @endif

@stop
