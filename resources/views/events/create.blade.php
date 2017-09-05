@extends('layouts.event')
@section('content')
    <div id="container">
      <h1>Create New Events</h1>
        <hr />
        {!! Form::model($events = new \App\Event, ['url'=>'/admin/events', 'files' => true]) !!}

          @include('events.form', ['submitButtonText'=>'Add Event'])

        {!! Form::close() !!}
        
        @include('errors.list')
    </div>

@endsection