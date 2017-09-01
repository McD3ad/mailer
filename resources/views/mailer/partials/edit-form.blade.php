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
	
	{{ csrf_field() }}
	
	<div class="text-right">
		<button class="button button-gray" name="submit" value="save">
			<i class="icon icon-left ion-ios-upload"></i>
			Сохранить
		</button>
		<button class="button" name="submit" value="send">
			Отправить
			<i class="icon icon-right ion-android-send"></i>
		</button>
	</div>
</form>