<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mailer extends Model
{
	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'subject',
		'body',
		'email_from',
		'email_to',
		'user_id'
	];

	/**
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function user()
	{
		return $this->belongsTo('User::class');
	}
}
