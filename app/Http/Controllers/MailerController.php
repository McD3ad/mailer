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
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
	public function index()
	{
		return view('mailer.index');
	}
	
	/**
	 * @param Mailer $mailer
	 *
	 * @param EmailFormsValidation $forms_validation
	 *
	 * @return redirect back
	 */
	public function store(Mailer $mailer, EmailFormsValidation $request)
	{
		$data = request()->all();
		$inky = new Inky();
		$body = $inky->releaseTheKraken($data['body']);
		
		Mail::send('emails.master', ['body' => $body], function ($m) use ($data) {
			$m->from($data['email_from'], 'Your Application');
			
			$m->to($data['email_to'])->subject($data['subject']);
		});
		
		$mailer->create([
			'subject'    => $data['subject'],
			'body'       => $data['body'],
			'email_to'   => $data['email_to'],
			'email_from' => $data['email_from'],
			'user_id'    => Auth::id(),
		]);
		
		return back();
	}
	
	/**
	 * @param Mailer $mailer
	 *
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
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
	 * @param Mailer $mailer
	 *
	 * @return $mailer
	 */
	public function edit(Mailer $mailer)
	{
		return view('mailer.edit', compact('mailer'));
	}
	
	/**
	 * @param $mailer
	 * @param Mailer $post
	 *
	 * @return \Illuminate\Http\RedirectResponse
	 */
	public function update($mailer, Mailer $post)
	{
		$message = $post->find($mailer);
		
		$message->update(request()->all());
		
		return back();
	}
	
	public function show()
	{
	
	}
}
