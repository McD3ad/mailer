<form action="{{ route('mailer.store') }}" method="post">
	<label>
		Адрес e-mail, куда нужно отправить сообщение
		<input type="email" name="email_to">
	</label>
	
	<label>
		Адрес, от имени которого нужно отправить письмо.
		<input type="email" name="email_from" value="{{ \Auth::user()->email }}">
	</label>
	
	<label>
		Тема письма
		<input type="text" name="subject">
	</label>
	
	<label>
		Сообщение:
		<textarea name="body" rows="8" id="inky">@include('emails.templates.' . $template)</textarea>
	</label>
	
	<div class="text-right">
		{{ csrf_field() }}
		<button class="button larger">
			Отправить
			<i class="icon icon-right ion-android-send"></i>
		</button>
	</div>
</form>