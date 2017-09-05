<!DOCTYPE html>
<html>
<head>
	<title>ImmaconAngelesCiityPH</title>
	<link rel="stylesheet" type="text/css" href="{{ URL::to('src/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{!! elixir('css/app.css') !!}">
	<link rel="stylesheet" type="text/css" href="{!! elixir('css/clock.css') !!}">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    
    <style>
        .file-upload-button {
            position: relative;
            overflow: hidden;
            width:150px;
            height:150px;
        }
        input[name="user_image"] {
            position: absolute;
            z-index: 100;
            top: 0;
            left: 0;
            font-size: 10em;
            opacity: .001;
        }
    </style>
    <link href="{{ URL::to('src/js/jqueryui/jquery-ui.min.css') }}" rel="stylesheet">
    <script src="{{ URL::to('src/js/tether/tether.js') }}"></script>
    <link href="{{ URL::to('src/js/jqueryui/jquery-ui.theme.min.css') }}" rel="stylesheet">
    <link href="{{ URL::to('src/js/select2/select2.min.css') }}" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="{{ URL::to('src/fa/css/font-awesome.css') }}">
</head>
<body>
	@include('partials.nav')
<div class="container">
	@yield('content')
</div>
	<script src="{{ URL::to('src/js/jquery/jquery.js') }}"></script>
    <script src="{{ URL::to('src/js/jqueryui/jquery-ui.min.js') }}"></script>
    
    <script>
        $(function() {
            $("#term").autocomplete({
            source: "{{ route('admin.parishofficers.autocomplete') }}",
            minLength: 3,
            select: function(event, ui) {
                $("#term").val(ui.item.value);
            }
            });
        }); 
    </script>
    <script type="text/javascript">
        function showimagepreview(input) 
        {
            if (input.files && input.files[0]) 
            {
            var filerdr = new FileReader();
            filerdr.onload = function(e) {
                $('#myProfile').attr('src', e.target.result);
            };
            filerdr.readAsDataURL(input.files[0]);
            }
        }
    </script>
	<script src="{{ URL::to('src/bootstrap/js/bootstrap.min.js') }}"></script>
	<script src="{!! elixir('js/clock.js') !!}"></script>
    <script src="{{ URL::to('src/js/select2/select2.min.js') }}"></script>
	@include('partials.footer')
    <script>
        $('#organization_list').select2({
            placeholder: "Choose Organization"
        });
    </script>
</body>
</html>