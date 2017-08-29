@extends('layouts.master')

@section('title', 'Авторизация')

@section('content')
	
	<main class="container content" role="main">
		<div class="row align-center">
			<div class="medium-6 large-4 column">
				<form class="auth" method="POST" action="{{ route('login') }}">
					{{ csrf_field() }}
					
					<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
						<label for="email" class="col-md-4 control-label">E-Mail адрес</label>
						
						<input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}"
						       required autofocus>
						
						@if ($errors->has('email'))
							<span class="help-block">
								<strong>{{ $errors->first('email') }}</strong>
							</span>
						@endif
					</div>
					
					<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
						<label for="password" class="col-md-4 control-label">Пароль</label>
						
						<input id="password" type="password" class="form-control" name="password" required>
						
						@if ($errors->has('password'))
							<span class="help-block">
								<strong>{{ $errors->first('password') }}</strong>
							</span>
						@endif
					</div>
					
					<div class="form-group">
						<div class="checkbox">
							<label>
								<input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
								Запомнить меня
							</label>
						</div>
					</div>
					
					<div class="form-group">
						<button type="submit" class="button">
							<i class="ion-log-in icon icon-left"></i>
							Войти
						</button>
						
						<a class="forgot-password" href="{{ route('password.request') }}">
							Забыли свой пароль?
						</a>
					</div>
				</form>
			</div>
		</div>
	</main>

@endsection
