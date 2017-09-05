@extends('layouts.organizations')
@section('content')
@if( auth()->check())
    @if( auth()->user()->hasRole('Admin'))
        @include('organizations.admin.index')
    @else
        @include('organizations.visitor.index')
    @endif
@else
    @include('organizations.visitor.index')
@endif

@stop