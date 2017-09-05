<!DOCTYPE html>
<html>
<head>
	<title>ImmaconAngelesCiityPH</title>
	<link rel="stylesheet" type="text/css" href="{{ URL::to('src/bootstrap/css/bootstrap.min.css') }}">
    <!--<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">-->
    <link rel="stylesheet" type="text/css" href="{!! elixir('css/app.css') !!}">
	<link rel="stylesheet" type="text/css" href="{!! elixir('css/clock.css') !!}">    
    <link rel="stylesheet" type="text/css" href="{{ URL::to('src/fa/css/font-awesome.css') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<style>
		/*.main-content {
			margin-left:auto;
			margin-rigth:auto;
			width:80%;	
		}*/
		.mission-vision {
			/*max-width:50vh;*/
		}
		.parish-officers {
			/*max-width:50vh;*/
            text-align: center;
			background-color:#bbb;
		}
		/*-- Organizations -- */
        .organizations {
            text-align: center;
            background-color:#ddd;
        }
        .org-header{
            font-size: 3em; 
        }
        .org-content{
            font-size: 1.3em;
        }
		/*-- Events -- */
        .events {
            text-align: center;
            background-color:#ccc;
        }
        .events-header{
            font-size: 3em; 
        }
        .events-content{
            font-size: 1.3em;
        }
		/*-- Google Map -- */
        .gmap {
            text-align: center;
            background-color:#ccc;
        }
        .gmap-header{
            font-size: 3em; 
        }
        .gmap-content{
            font-size: 1.3em;
        }
	</style>
</head>
<body>
	@include('partials.nav')
<div class="container">
	@yield('content')
</div>
    <script src="{{ URL::to('src/js/jquery/jquery.js') }}"></script>
    <script src="{{ URL::to('src/js/tether/tether.js') }}"></script>
	<script src="{{ URL::to('src/bootstrap/js/bootstrap.min.js') }}"></script>
	<script src="{!! elixir('js/clock.js') !!}"></script>
	@include('partials.footer')
</body>
</html>