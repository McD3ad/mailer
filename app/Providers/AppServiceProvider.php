<?php

namespace App\Providers;

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
