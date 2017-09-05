@if ($abouts->count())
@foreach ($abouts as $about)
    <div class="mission">
    <h3>Mission</h3>
    {{ $about->mission }}
    </div>
    <div class="vision">
    <h3>Vision</h3>
    {{ $about->vision }}
    </div>
    <div class="history">
    <h3>History</h3>
        {{ $about->history }}
    </div>
  
@endforeach
@else
    There are no information on About.
@endif