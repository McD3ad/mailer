@extends('layouts.master')

@section('title', 'Подготовка письма')

@section('content')

    <div class="row collapse editor">
        @include('mailer.partials.aside')

        <section class="column">
            <div class="editor-main-entry">
                <header>
                    <nav>
                        <ul class="menu align-middle">
                            <li><a href="#" class="icon ion-trash-b" title="Удалить"></a></li>
                            <li><a href="#" class="icon ion-code-working" title="Редактировать"></a></li>
                            <li><a href="#" class="icon ion-ios-refresh" title="Повторить отправку"></a></li>
                        </ul>
                    </nav>
                </header>

                <main role="main">
                    @include('partials.main-form')
                </main>
            </div>
        </section>
    </div>

@endsection