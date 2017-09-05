@extends('layouts.organizations')
@section('content')
    <div id="container">
      <h1>Create New Organization</h1>
        <hr />
        {!! Form::model($organizations = new \App\Organization, ['url'=>'/admin/organizations']) !!}

          @include('organizations.form', ['submitButtonText'=>'Add Organizations'])

        {!! Form::close() !!}
        
        @include('errors.list')
    </div>

@endsection