<?php
Route::get('/', function () {
	return view('layouts.index');
});

Route::get('templates', 'TemplateController@index')->name('templates.index');

Route::resource('mailer', 'MailerController');

Route::prefix('docs')->group(function () {
	Route::get('/', 'DocumentationController@index')->name('docs.index');
});
