<form action="{{ route('mailer.update', $mailer) }}" method="post">
	<label>
		Адрес e-mail, куда нужно отправить сообщение
		<input type="email" name="email_to" value="{{ $mailer->email_to }}">
	</label>
	
	<label>
		Адрес, от имени которого нужно отправить письмо.
		<input type="email" name="email_from" value="{{ $mailer->email_from }}">
	</label>
	
	<label>
		Тема письма
		<input type="text" name="subject" value="{{ $mailer->subject }}">
	</label>
	
	<label>
		Сообщение:
		<textarea name="body" rows="8" id="inky">{{ $mailer->body }}</textarea>
	</label>
	
	<div class="text-right">
		{{ csrf_field() }}
		<input type="hidden" name="_method" value="put">
		<button class="button larger">
			Повторить отправку
			<i class="icon icon-right ion-android-send"></i>
		</button>
	</div>
</form>