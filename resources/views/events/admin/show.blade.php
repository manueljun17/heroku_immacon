<div class="text-center">
        <h1> {{ $events->title }} </h1>
</div>
<div class="text-center">
    @if($events->event_location)
        <h4>Location: {{ $events->event_location }} </h4>
    @endif
</div>

<article>
    {!! $events->body !!}
</article>
<a class="btn btn-warning form-control" href="{{ route('admin.events.edit',array($events->id)) }}">Edit</a>
<a class="btn btn-info form-control" href="{{ route('admin.events') }}">Back</a>