<div>
<h1>Parish Officers</h1>
<a class="btn btn-info" href="{{ route('admin.parishofficers.create') }}">Add Parish Officer</a>
{!! Form::open(['route' => 'admin.parishofficers', 'method' => 'GET', 'class' => 'form-inline', 'role' => 'search']) !!}

<div class="input-group">
    {!! Form::text('term', Request::get('term'), ['class' => 'form-control', 'placeholder' => 'Search...', 'id' => 'term']) !!}              
    <span class="input-group-btn">
    <button class="btn btn-default" type="submit">
        <i class="fa fa-search"></i>
    </button>
    </span>
</div>
{!! Form::close() !!}
</div>

@if ($parishofficers->count())
    <table class="table table-striped table-bordered table-responsive">
        <thead>
            <tr>
                <th>ID</th>
                <th>Profile</th>
                <th>Name</th>
                <th>Position</th>
                <th>Description</th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
        </thead>

        <tbody>
            @foreach ($parishofficers as $parishofficer)
                <tr>
                    <td>{{ $parishofficer->id }}</td>
                    <td><img src="{{ asset($parishofficer->user_image)}}" width="50px" height="50px"></td>
                    <td>{{ $parishofficer->name }}</td>
                    <td>{{ $parishofficer->position }}</td>
                    <td>{{ $parishofficer->description }}</td>
                    <td>
                        <a class="btn btn-info" href="{{ route('admin.parishofficers.show',array($parishofficer->id)) }}">Show</a>
                    </td>
                    <td>
                        <a class="btn btn-success" href="{{ route('admin.parishofficers.edit',array($parishofficer->id)) }}">Edit</a>
                    </td>
                    <td>{{ Form::open(array('route' => array('admin.parishofficers.destroy', $parishofficer->id), 'method' => 'delete')) }}
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Do you really want to delete the information?')">Delete</button>
                        {{ Form::close() }}</td>
                </tr>
            @endforeach
        </tbody>
      
    </table>
    <div class="text-center">
        <nav>
        {!! $parishofficers->appends( Request::query() )->render() !!}
        </nav>
    </div>
@else
    There are no Parish Officers info
@endif