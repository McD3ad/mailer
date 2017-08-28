@extends('layouts.master')

@section('title', 'Подготовка письма')

@section('content')

    <div class="row collapse editor">
        @include('mailer.partials.aside')

        <section class="column">
            <div class="editor-main-entry">

                <main role="main" class="intro">
                    <h3 class="gray">Ни одно сообщение не выбрано.</h3>
                </main>

            </div>
        </section>
    </div>

@endsection