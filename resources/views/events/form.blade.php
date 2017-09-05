  
    <div class="form-group">
 		{!! Form::label('Event Name:') !!}
 		{!! Form::text('title', null , ['class' => 'form-control']) !!}
 	</div>

     <div class="form-group">
 		{!! Form::label('Event Location:') !!}
 		{!! Form::text('event_location', null , ['class' => 'form-control']) !!}
 	</div>

     <div class="form-group">
 		{!! Form::label('event_date','Date:') !!}
 		{!! Form::date('event_date', null , ['class' => 'form-control']) !!}
 	</div> 	

    

     <div class="form-group">
 		{!! Form::label('body','Content:') !!}
 		{!! Form::textarea('body', null , ['class' => 'form-control']) !!}
 	</div>

 	<div class="form-group">
 		{!! Form::submit($submitButtonText, ['class' => 'btn btn-info form-control']) !!}
        <a class="btn btn-warning form-control" href="{{ route('admin.events') }}">Back</a>
 	</div>	