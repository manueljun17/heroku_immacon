@extends('layouts.config')
@section('content')
    <div id="container">
      <h1>Create New Config</h1>
        <hr />
        {!! Form::model($config = new \App\Config, ['url'=>'/admin/configs', 'files' => true]) !!}

          @include('config.form', ['submitButtonText'=>'Add Config'])

        {!! Form::close() !!}
        
        @include('errors.list')
    </div>

@endsection