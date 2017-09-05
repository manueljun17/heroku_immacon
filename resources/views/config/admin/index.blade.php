<div>
<h1>Configs</h1>
<a class="btn btn-info" href="{{ route('admin.configs.create') }}">Add Config</a>
{!! Form::open(['route' => 'admin.configs', 'method' => 'GET', 'class' => 'form-inline', 'role' => 'search']) !!}
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

@if ($configs->count())
    <table class="table table-striped table-bordered table-responsive">
        <thead>
            <tr>
                <th>ID</th>
                <th>Key</th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
        </thead>

        <tbody>
            @foreach ($configs as $config)
                <tr>
                    <td>{{ $config->id }}</td>
                    <td>{{ $config->key }}</td>
                    <td>
                        <a class="btn btn-info" href="{{ route('admin.configs.show',array($config->id)) }}">Show</a>
                    </td>
                    <td>
                        <a class="btn btn-success" href="{{ route('admin.configs.edit',array($config->id)) }}">Edit</a>
                    </td>
                    <td>{{ Form::open(array('route' => array('admin.configs.destroy', $config->id), 'method' => 'delete')) }}
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Do you really want to delete this Data?')">Delete</button>
                        {{ Form::close() }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="text-center">
        <nav>
        {!! $configs->appends( Request::query() )->render() !!}
        </nav>
    </div>
@else
    There are no Configs
@endif