@extends('layouts.master')

@section('title', 'Регистрация')

@section('content')
	
	<main class="container content" role="main">
		<div class="row align-center">
			<div class="medium-6 large-4 column">
				<form class="form-horizontal" method="POST" action="{{ route('register') }}">
					{{ csrf_field() }}
					
					<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
						<label for="name" class="col-md-4 control-label">Name</label>
						
						<input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}"
						       required autofocus>
						
						@if ($errors->has('name'))
							<span class="help-block">
								<strong>{{ $errors->first('name') }}</strong>
							</span>
						@endif
					</div>
					
					<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
						<label for="email" class="col-md-4 control-label">E-Mail Address</label>
						
						<input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}"
						       required>
						
						@if ($errors->has('email'))
							<span class="help-block">
								<strong>{{ $errors->first('email') }}</strong>
							</span>
						@endif
					</div>
					
					<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
						<label for="password" class="col-md-4 control-label">Password</label>
						
						<input id="password" type="password" class="form-control" name="password" required>
						
						@if ($errors->has('password'))
							<span class="help-block">
								<strong>{{ $errors->first('password') }}</strong>
							</span>
						@endif
					</div>
					
					<div class="form-group">
						<label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>
						
						<input id="password-confirm" type="password" class="form-control"
						       name="password_confirmation" required>
					</div>
					
					<div class="form-group">
						<button type="submit" class="button">
							<i class="ion-link icon icon-left"></i>
							Register
						</button>
					</div>
				</form>
			</div>
		</div>
	</main>

@endsection
