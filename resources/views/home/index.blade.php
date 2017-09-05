@extends('app')

@section('content')


    <figure class="main-content">
        <div class="mission-vision">
            <div class="mv-header">
                <p>Immaculate Conception</p>
            </div>
            <div class="mv-content">
                <p>{{ $about->mission}}</p>
            </div>
        </div>   
    </figure>

   <div class="mini-box">
<div class="row">
<div class="col-md-6">
     
        <div class="mv-header">
            <span>Schedule</span>
        </div>
        <div class="mv-content">
            <p>{!! $general_info['mass_schedule'] !!}</p>
        </div>
</div>
<div class="col-md-6">
    <div class="banner">
        <img src="{{asset('img/settings/sched.png')}}">
    </div>
</div>    
</div>

</div> 
@endsection