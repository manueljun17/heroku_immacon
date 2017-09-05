<div>
<h1>Events</h1>
<a class="btn btn-info" href="{{ route('admin.events.create') }}">Add Event</a>
{!! Form::open(['route' => 'admin.events', 'method' => 'GET', 'class' => 'form-inline', 'role' => 'search']) !!}
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

@if ($events->count())
    <table class="table table-striped table-bordered table-responsive">
        <thead>
            <tr>
                <th>ID</th>
                <th>Event</th>
                <th>Location</th>
                <th>Date</th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
        </thead>

        <tbody>
            @foreach ($events as $event)
                <tr>
                    <td>{{ $event->id }}</td>
                    <td>{{ $event->title }}</td>
                    <td>{{ $event->event_location }}</td>
                    <td>{{ $event->event_date }}</td>
                    <td>
                        <a class="btn btn-info" href="{{ route('admin.events.show',array($event->id)) }}">Show</a>
                    </td>
                    <td>
                        <a class="btn btn-success" href="{{ route('admin.events.edit',array($event->id)) }}">Edit</a>
                    </td>
                    <td>{{ Form::open(array('route' => array('admin.events.destroy', $event->id), 'method' => 'delete')) }}
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Do you really want to delete this Data?')">Delete</button>
                        {{ Form::close() }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="text-center">
        <nav>
        {!! $events->appends( Request::query() )->render() !!}
        </nav>
    </div>
@else
    There are no Events
@endif