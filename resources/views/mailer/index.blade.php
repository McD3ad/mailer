@extends('layouts.master')

@section('title', 'Подготовка письма')

@section('content')
	
	<div class="row collapse editor">
		@include('mailer.partials.aside')
		
		<section class="column">
			<div class="editor-main-entry">
				
				<main role="main" class="intro">
					
					<div class="text-center">
						<h4 class="gray">Ни одно сообщение не выбрано...</h4>
						<h3 class="gray">Вы можете выбрать одно из сообщений и повторно отправить его или <a
									href="{{ route('mailer.create') }}"
									class="button"><i class="ion-compose icon icon-left"></i>Создать новое</a></h3>
					</div>
					
				</main>
			
			</div>
		</section>
	</div>

@endsection