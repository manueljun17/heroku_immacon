<div class="text-center">
        <h1> {{ $configs->key }} </h1>
</div>
<article>
    {!! $configs->value !!}
</article>
<a class="btn btn-warning form-control" href="{{ route('admin.configs.edit',array($configs->id)) }}">Edit</a>
<a class="btn btn-info form-control" href="{{ route('admin.configs') }}">Back</a>