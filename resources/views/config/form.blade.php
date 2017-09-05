    <div class="form-group">
 		{!! Form::label('Key:') !!}
 		{!! Form::text('key', null , ['class' => 'form-control']) !!}
 	</div>

     <div class="form-group">
 		{!! Form::label('value','Value:') !!}
 		{!! Form::textarea('value', null , ['class' => 'form-control']) !!}
 	</div>

 	<div class="form-group">
 		{!! Form::submit($submitButtonText, ['class' => 'btn btn-info form-control']) !!}
        <a class="btn btn-warning form-control" href="{{ route('admin.configs') }}">Back</a>
 	</div>	