@extends('layouts.about')

@section('content')
<h1>Edit About</h1>
{{ Form::model($about, array('method' => 'PATCH', 'route' => array('admin.about.update', $about->id))) }}
    <ul style="list-style-type: none;">
    <h4>{{ Form::label('mission', 'Mission:') }}</h4>
        <li>
            {{ Form::textarea('mission') }}
        </li>
    <h4>{{ Form::label('vision', 'Vision:') }}</h4>
        <li>
            {{ Form::textarea('vision') }}
        </li>
    <h4>{{ Form::label('history', 'History:') }}</h4>
        <li>
            {{ Form::textarea('history') }}
        </li>
        <li>
            {{ Form::submit('Update', array('class' => 'btn btn-info')) }}
            <a class="btn btn-success" href="{{ route('admin.about') }}">Back</a>
        </li>
    </ul>
{{ Form::close() }}

@stop