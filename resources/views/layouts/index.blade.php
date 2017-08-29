@extends('layouts.master')

@section('title', 'Почтовый сервис')

@section('content')
    
    <main role="main" class="container">
        
        <div class="row">
            <div class="column shrink">
                <img src="http://foundation.zurb.com/assets/img/homepage/inky-template.svg" class="callout-image"
                     alt="Foundation Emails">
            </div>
            
            <div class="column">
                <h2 class="title">Шаблонизатор Inky
                    <mark>Library</mark>
                </h2>
                <p>Inky is a templating language that converts simple HTML tags into the complex table HTML required for
                    emails.</p>
                <p>Подробная документация по шаблонизатору
                    <a href="https://foundation.zurb.com/emails/docs/inky.html"
                       class="hollow button button__external button__inline"
                       target="_blank"><span>Inky</span><i class="ion-forward icon icon-right"></i></a></p>
            </div>
        </div>
    
    </main>

@endsection