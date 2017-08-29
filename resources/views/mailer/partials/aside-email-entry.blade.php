<h5 class="column small-8 email-list__article-title">
	{{ $article->subject }}
</h5>
<div class="column small-4 text-right">
	<div class="date">
		{{ $article->created_at->diffForHumans() }}
	</div>
</div>