<?php

namespace App\Providers;

use App\Mailer;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
	/**
	 * Bootstrap any application services.
	 *
	 * @return void
	 */
	public function boot()
	{
		view()->composer('partials.navigation', function ($view) {
			$nav = collect([
				[
					'name' => 'Главная',
					'link' => url('/'),
					'icon' => 'home'
				],
				[
					'name' => 'Шаблоны',
					'link' => url('templates'),
					'icon' => 'proto'
				],
				[
					'name' => 'Конструктор',
					'link' => url('mailer'),
					'icon' => 'constructor'
				],
				[
					'name' => 'Документация',
					'link' => url('docs'),
					'icon' => 'docs'
				]
			]);

			$view->with('navigation', $nav);
		});


		\Carbon\Carbon::setLocale('ru');
		
		view()->composer('mailer.partials.aside', function($view) {
			$user     = Auth::id();
			$articles = Mailer::query()->where('user_id', $user)->latest()->get();
			
			$view->with('articles', $articles);
		});
	}

	/**
	 * Register any application services.
	 *
	 * @return void
	 */
	public function register()
	{
		//
	}
}
