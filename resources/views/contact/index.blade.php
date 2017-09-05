@extends('layouts.contact')
@section('content')
    @if( auth()->check())
        @if( auth()->user()->hasRole('Admin'))
            @include('contact.admin.index')
        @endif
    @else
        @include('contact.visitor.index')
    @endif
@stop
