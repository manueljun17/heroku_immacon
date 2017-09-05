<!DOCTYPE html>
<html>
<head>
	<title>ImmaconAngelesCiityPH</title>
	<link rel="stylesheet" type="text/css" href="{{ URL::to('src/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{!! elixir('css/app.css') !!}">
	<link rel="stylesheet" type="text/css" href="{!! elixir('css/clock.css') !!}">
	<link rel="stylesheet" type="text/css" href="{{ URL::to('src/fa/css/font-awesome.css') }}">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<style>
        .file-upload-button {
            position: relative;
            overflow: hidden;
            width:100%;
			max-width:1070px;
            height:100%;
        }
        input[name="image_banner"] {
            position: absolute;
            z-index: 100;
            top: 0;
            left: 0;
            font-size: 10em;
			opacity: .001;
			height:100%;
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
	<script type="text/javascript">
        function showimagepreview(input) 
        {
            if (input.files && input.files[0]) 
            {
            var filerdr = new FileReader();
            filerdr.onload = function(e) {
                $('#myBanner').attr('src', e.target.result);
            };
            filerdr.readAsDataURL(input.files[0]);
            }
        }
    </script>
	@include('partials.footer')
</body>
</html>

