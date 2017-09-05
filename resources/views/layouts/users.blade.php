<!DOCTYPE html>
<html>
<head>
	<title>ImmaconAngelesCiityPH</title>
	<link rel="stylesheet" type="text/css" href="{{ URL::to('src/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{!! elixir('css/app.css') !!}">
	<link rel="stylesheet" type="text/css" href="{!! elixir('css/clock.css') !!}">
    <link href="{{ URL::to('src/js/jqueryui/jquery-ui.min.css') }}" rel="stylesheet">
    <link href="{{ URL::to('src/js/jqueryui/jquery-ui.theme.min.css') }}" rel="stylesheet">
    <link href="{{ URL::to('src/js/select2/select2.min.css') }}" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="{{ URL::to('src/fa/css/font-awesome.css') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

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
            source: "{{ route('admin.users.autocomplete') }}",
            minLength: 3,
            select: function(event, ui) {
                $("#term").val(ui.item.value);
            }
            });
        }); 
    </script>
    <script src="{{ URL::to('src/js/tether/tether.js') }}"></script>
	<script src="{{ URL::to('src/bootstrap/js/bootstrap.min.js') }}"></script>
	<script src="{!! elixir('js/clock.js') !!}"></script>
	<script src="{{ URL::to('src/js/select2/select2.min.js') }}"></script>
	@include('partials.footer')
    <script>
        $('#role_list').select2({
            placeholder: "Choose Roles"
        });
    </script>
</body>
</html>