@extends('layouts.master')

@section('title', 'Редактирование письма')

@section('content')
	
	<div class="row collapse editor">
		@include('mailer.partials.aside')
		
		<section class="column">
			<div class="editor-main-entry">
				@include('mailer.partials.compose-header')
				
				<main role="main">
					@include('mailer.partials.edit-form')
				</main>
			</div>
		</section>
	</div>

@endsection