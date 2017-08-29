<aside class="column shrink">
	<div class="editor-aside-entry">
		<header>
			<a href="{{ route('mailer.create') }}" class="button larger expanded">
				<i class="ion-compose icon icon-left"></i>
				Создать новое сообщение
			</a>
		</header>
		
		@if (isset($articles))
			<ul class="email-list no-bullet">
				@foreach($articles as $article)
					@if (request()->url() == route('mailer.edit', $article->id))
						<li class="email-list__article edited-now">
							<div class="row collapse email-list__article-item">
								@include('mailer.partials.aside-email-entry')
							</div>
						</li>
					@else
						<li class="email-list__article">
							<a href="{{ route('mailer.edit', $article->id) }}" class="row collapse email-list__article-item">
								@include('mailer.partials.aside-email-entry')
							</a>
						</li>
					@endif
				
				@endforeach
			</ul>
		@endif
	</div>
</aside>