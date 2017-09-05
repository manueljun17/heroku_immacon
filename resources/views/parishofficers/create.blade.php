@extends('layouts.parishofficer')
@section('content')
    <div id="container">
      <h1>Create New Parish Officers</h1>
        <hr />
        {!! Form::model($parishofficers = new \App\Parishofficers, ['url'=>'/admin/parishofficers', 'files' => true]) !!}

          @include('parishofficers.form', ['submitButtonText'=>'Add Parish Officer'])

        {!! Form::close() !!}
        
        @include('errors.list')
    </div>

@endsection