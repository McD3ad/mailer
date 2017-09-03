<form action="{{ route('mailer.store') }}" method="post">
	<label>
		Адрес e-mail, куда нужно отправить сообщение
		<input type="email" name="email_to">
	</label>
	
	<label>
		Адрес, от имени которого нужно отправить письмо.
		<input type="email" name="email_from" value="{{ auth()->user()->email }}">
	</label>
	
	<label>
		Тема письма
		<input type="text" name="subject">
	</label>
	
	<label>
		Сообщение:
		{{--<textarea name="body" rows="8" id="inky">@include('emails.templates.' . $template)</textarea>--}}

		<div id="editor">
            <editor></editor>
        </div>
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