@extends('layouts.contact')
@section('content')
<h1>Edit Contact Us</h1>
{{ Form::model($contact, array('method' => 'PATCH', 'route' => array('admin.contact.update', $contact->id),'files' => true)) }}
    
    <ul style="list-style-type: none;">
    <h4>{{ Form::label('image_banner', 'Banner:') }}</h4>
    <li>
        @if($contact->image_banner)
        <div class="form-group file-upload-button">
            <img id="myBanner" src="{{asset($contact->image_banner)}}" style="width: 100%"></img>
            <input name="image_banner" type="file" onchange="showimagepreview(this)" />
        </div>
        @else
        <div class="form-group file-upload-button">
            <img id="myBanner" src="{{asset($defaultImage)}}" style="width: 100%"></img>
            <input name="image_banner" type="file" onchange="showimagepreview(this)" />
        </div>
        @endif
    </li>
    
    <h4>{{ Form::label('cell_number', 'Cell Phone:') }}</h4>
        <li>
            {{ Form::textarea('cell_number',$contact->cell_number, ['class' => 'full-textarea']) }}
        </li>
    <h4>{{ Form::label('phone_number', 'Tele Phone:') }}</h4>
        <li>
            {{ Form::textarea('phone_number',$contact->phone_number, ['class' => 'full-textarea']) }}
        </li>
    <h4>{{ Form::label('address', 'Address:') }}</h4>
        <li>
            {{ Form::textarea('address',$contact->address, ['class' => 'full-textarea']) }}
        </li>
    <h4>{{ Form::label('email_address', 'E-mail:') }}</h4>
        <li>
            {{ Form::textarea('email_address',$contact->email_address, ['class' => 'full-textarea']) }}
        </li>
    <h4>{{ Form::label('account_name', 'Bank Name:') }}</h4>
        <li>
            {{ Form::textarea('account_name',$contact->account_name, ['class' => 'full-textarea']) }}
        </li>
    <h4>{{ Form::label('account_number', 'Bank Number:') }}</h4>
        <li>
            {{ Form::textarea('account_number',$contact->account_number, ['class' => 'full-textarea']) }}
        </li>
        <li>
            {{ Form::submit('Update', array('class' => 'btn btn-info')) }}
            <a class="btn btn-success" href="{{ route('admin.contact') }}">Back</a>
        </li>
    </ul>
{{ Form::close() }}
@include('errors.list')
@stop