<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	
	<title>@yield('title')</title>
	
	<link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
	<link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>

{!! file_get_contents(url('images/icons.svg')) !!}

<header id="top-bar">
	
	@include('partials.topbar')

</header>

<section class="layout row collapse">
	@include('partials.navigation')
	
	<div id="app" class="column">
		@yield('content')
	</div>
</section>

@if ($errors->any())
	<div class="errors flash-message">
		<ol>
			@foreach($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		</ol>
	</div>
@endif

@if(Session::has('status'))
    <div class="status flash-message">
        {{ session('status') }}
    </div>
@endif

<script src="{{ asset('js/master.js') }}"></script>

@yield('scripts')

</body>
</html>
