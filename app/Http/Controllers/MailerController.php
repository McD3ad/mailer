<?php

namespace App\Http\Controllers;

use App\Http\Requests\EmailFormsValidation;
use App\Models\Mailer;
use Hampe\Inky\Inky;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class MailerController extends Controller
{
	/**
	 * MailerController constructor.
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}
	
	
	/**
	 * Mailer index view
	 */
	public function index()
	{
		return view('mailer.index');
	}
	
	
	/**
	 * Save and if needed send an emails
	 *
	 * @param Mailer $mailer
	 *
	 * @param EmailFormsValidation $forms_validation
	 */
	public function store(Mailer $mailer, EmailFormsValidation $request)
	{
		$data = request()->all();

		if ($data['submit'] == 'send') {
			$inky = new Inky();
			$body = $inky->releaseTheKraken($data['body']);
			
			Mail::send('emails.master', ['body' => $body], function ($m) use ($data) {
				$m->from($data['email_from'], 'Mailer');
				
				$m->to($data['email_to'])->subject($data['subject']);
			});
		}
		
		$mailer->create([
			'subject'    => $data['subject'],
			'body'       => $data['body'],
			'email_to'   => $data['email_to'],
			'email_from' => $data['email_from'],
			'user_id'    => Auth::id(),
		]);
		
		request()->session()->flash('status', 'Сообщение успешно отправлено');
		
		return back();
	}
	
	
	/**
	 * Create email composer form
	 *
	 * @param Mailer $mailer
	 */
	public function create()
	{
		$template = 'default';
		
		if (request()->get('template')) {
			$template = request()->get('template');
		}
		
		return view('mailer.compose', compact('template'));
	}
	
	
	/**
	 * Get email edit page
	 *
	 * @param Mailer $mailer
	 */
	public function edit(Mailer $mailer)
	{
		return view('mailer.edit', compact('mailer'));
	}
	
	
	/**
	 * Update and send if needed an email
	 *
	 * @param $mailer
	 * @param Mailer $post
	 */
	public function update($mailer, Mailer $post)
	{
		$data = request()->all();

		if ($data['submit'] == 'send') {
			$inky = new Inky();
			$body = $inky->releaseTheKraken($data['body']);

			Mail::send('emails.master', ['body' => $body], function ($m) use ($data) {
				$m->from($data['email_from'], 'Mailer');

				$m->to($data['email_to'])->subject($data['subject']);
			});
		}

//		array_push($data, ['updated_at' => time()]);
		
		$message = $post->find($mailer);
		$message->update($data);
		
		request()->session()->flash('status', 'Сообщение успешно отправлено');
		
		return back();
	}
}
