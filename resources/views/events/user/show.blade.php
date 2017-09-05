<div class="text-center">
        <h1> {{ $events->title }} </h1>
</div>
<div class="text-center">
    @if($events->event_location)
        <h4>Location: {{ $events->event_location }} </h4>
    @endif
    @if($events->start_time && $events->start_time != "00:00:00")
    {{ $events->start_time }} 
    @endif
    @if($events->start_time && $events->end_time && $events->start_time != "00:00:00" && $events->end_time != "00:00:00")
        -
    @endif
    @if($events->end_time && $events->end_time != "00:00:00")
    {{ $events->end_time }} 
    @endif
</div>

<article>
    {!! $events->body !!}
</article>
<a class="btn btn-warning form-control" href="{{ route('events.edit',array($events->id)) }}">Edit</a>
<a class="btn btn-info form-control" href="{{ route('events') }}">Back</a>