<?php
Route::get('/', function () {
	return view('index');
});

Route::get('templates', 'TemplateController@index')->name('templates.index');

Route::resource('mailer', 'MailerController');

Route::prefix('documentation')->group(function () {
	Route::get('/', 'DocumentationController@index')->name('docs.index');
});

Auth::routes();
