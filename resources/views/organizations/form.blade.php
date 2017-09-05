<div class="form-group">
 		{!! Form::label('Name:') !!}
 		{!! Form::text('name', null , ['class' => 'form-control']) !!}
 	</div>

 	<div class="form-group">
 		{!! Form::label('description','Description:') !!}
 		{!! Form::textarea('description', null , ['class' => 'form-control']) !!}
 	</div>	

 	<div class="form-group">
 		{!! Form::submit($submitButtonText, ['class' => 'btn btn-info form-control']) !!}
        <a class="btn btn-warning form-control" href="{{ route('admin.organizations') }}">Back</a>
 	</div>