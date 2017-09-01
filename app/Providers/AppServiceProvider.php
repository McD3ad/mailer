<?php

namespace App\Providers;

use App\Models\Mailer;
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
