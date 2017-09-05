<div>
<h1>Parish Officers</h1>
{!! Form::open(['route' => 'parishofficers', 'method' => 'GET', 'class' => 'form-inline', 'role' => 'search']) !!}

<div class="input-group">
    {!! Form::text('term', Request::get('term'), ['class' => 'form-control', 'placeholder' => 'Search...', 'id' => 'term']) !!}              

    <button class="btn btn-default" type="submit">
        <i class="fa fa-search"></i>
    </button>
</div>
{!! Form::close() !!}
</div>
@if ($parishofficers->count())
<div class="card-columns">
    @foreach ($parishofficers as $parishofficer)

        <div class="card">
        <img class="card-img-top" src="{{ asset($parishofficer->user_image)}}" alt="Parish Officer Image"  width="100%" height="auto">
        <div class="card-block">
            <h4 class="card-title">{{ $parishofficer->name }}</h4>
            <h5 class="card-title">{{ $parishofficer->position }}</h5>
            <p class="card-text">{{ $parishofficer->description }}</p>
            <a href="{{ route('parishofficers.show',array($parishofficer->id)) }}" class="btn btn-info">Show</a>
        </div>
        </div>
    @endforeach
    </div>
    <div class="text-center">
        <nav>
        {!! $parishofficers->appends( Request::query() )->render() !!}
        </nav>
    </div>
@else
    There are no Parish Officers info
@endif
