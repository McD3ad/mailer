<aside class="column shrink">
    <div class="editor-aside-entry">
        <header>
            <a href="{{ route('mailer.create') }}" class="button larger expanded">
                <i class="ion-compose icon icon-left"></i>Создать новое сообщение
            </a>
        </header>

        @if (isset($articles))
            <ul class="email-list no-bullet">
                @foreach($articles as $article)

                    <li class="email-list-article">
                        <a href="/mailer/{{ $article->id }}/edit" class="row">
                            <h5 class="column small-8 email-list-article__title">
                                {{ $article->subject }}
                            </h5>
                            <div class="column small-4 text-right">
                                <div class="date">
                                    {{ $article->created_at->diffForHumans() }}
                                </div>
                            </div>
                        </a>
                    </li>

                @endforeach
            </ul>
        @endif
    </div>
</aside>