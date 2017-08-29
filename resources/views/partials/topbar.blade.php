<div class="row align-middle">
	<div class="column">
		<a href="{{ url('/') }}" id="logo">
			<i class="ion-fireball"></i>
			Mailer
		</a>
	</div>
	<div class="column">
		<ul class="menu align-right">
			@if (Auth::guest())
				<li><a href="{{ route('login') }}">Войти</a></li>
				<li><a href="{{ route('register') }}">Регистрация</a></li>
			@else
				<li class="menu align-middle">
					<a href="#" role="button" aria-expanded="false">
						<strong>{{ Auth::user()->name }}</strong>
					</a>
					
					<a href="{{ route('logout') }}" class="logout"
					   onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
						Выйти
						<i class="ion-log-out icon"></i>
					</a>
					
					<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
						{{ csrf_field() }}
					</form>
				</li>
			@endif
		</ul>
	</div>
</div>