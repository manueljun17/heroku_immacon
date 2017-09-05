	@if($parishofficers->user_image)
    <div class="form-group file-upload-button">
        <img id="myProfile" src="{{asset($parishofficers->user_image)}}" width="150px" height="150px"></img>
        <input name="user_image" type="file" onchange="showimagepreview(this)" />
    </div>
    @else
    <div class="form-group file-upload-button">
        <img id="myProfile" src="{{asset($defaultImage)}}" width="150px" height="150px"></img>
        <input name="user_image" type="file" onchange="showimagepreview(this)" />
    </div>
    @endif

    <div class="form-group">
 		{!! Form::label('Name:') !!}
 		{!! Form::text('name', null , ['class' => 'form-control']) !!}
 	</div>

    <div class="form-group">
 		{!! Form::label('position','Position:') !!}
 		{!! Form::text('position', null , ['class' => 'form-control']) !!}
 	</div>

	<div class="form-group">
 		{!! Form::label('organization_list', 'Organizations:') !!}
 		{!! Form::select('organization_list[]', $organizations, null, ['id'=>'organization_list', 'class' => 'form-control','multiple']) !!}
 	</div>

 	<div class="form-group">
 		{!! Form::label('description','Description:') !!}
 		{!! Form::textarea('description', null , ['class' => 'form-control']) !!}
 	</div>	

 	<div class="form-group">
 		{!! Form::submit($submitButtonText, ['class' => 'btn btn-info form-control']) !!}
        <a class="btn btn-warning form-control" href="{{ route('admin.parishofficers') }}">Back</a>
 	</div>	