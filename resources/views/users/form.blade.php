    <div class="form-group">
 	   {!! Form::label('First Name') !!}
 	   {!! Form::text('first_name', null , ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
 	   {!! Form::label('Last Name') !!}
 	   {!! Form::text('last_name', null , ['class' => 'form-control']) !!}
    </div>
    
    @if( $submitButtonText == 'Add User')
    <div class="form-group">
 	   {!! Form::label('E-Mail Address') !!}
 	   {!! Form::email('email', null , ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
 	   {!! Form::label('Password') !!}
 	   {!! Form::password('password', ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
 	   {!! Form::label('Confirm Password') !!}
 	   {!! Form::password('password_confirmation', ['class' => 'form-control']) !!}
    </div>	
    @endif

    <div class="form-group">
 		{!! Form::label('role_list', 'Roles:') !!}
 		{!! Form::select('role_list[]', $roles, null, ['id'=>'role_list', 'class' => 'form-control','multiple']) !!}
 	</div>

    <div class="form-group">
 	   {!! Form::submit($submitButtonText, ['class' => 'btn btn-info form-control']) !!}
        <a class="btn btn-warning form-control" href="{{ route('admin.users') }}">Back</a>
    </div>