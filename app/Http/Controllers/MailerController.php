<?php

namespace App\Http\Controllers;

use App\Mailer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailerController extends Controller
{
	/**
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
	public function index(Mailer $mailer)
	{
		$articles = $mailer->latest()->get();

		return view('mailer.index', compact($articles));
	}

	public function store(Mailer $mailer)
	{
		$data = request()->all();

		Mail::send('emails.master', ['data' => $data['body']], function ($m) use ($data) {
			$m->from($data['email_from'], 'Your Application');

			$m->to($data['email_to'])->subject($data['subject']);
		});

		$mailer->create([
			'subject'    => $data['subject'],
			'body'       => $data['body'],
			'email_to'   => $data['email_to'],
			'email_from' => $data['email_from'],
			'user_id'    => 1
		]);

		return back();
	}

	public function create(Mailer $mailer)
	{
		$template = 'default';

		if (request()->get('template')) {
			$template = request()->get('template');
		}

		$articles = $mailer->latest()->get();

		return view('mailer.compose', compact('template', 'articles'));
	}
}
