@extends('layouts.config')
@section('content')
    @if( auth()->check())
        @if( auth()->user()->hasRole('Admin'))
            @include('config.admin.index')
        @endif
    @endif
@stop
