<?php
$navigation = collect([
	[
		'name' => 'Главная',
		'link' => url('/'),
		'icon' => 'home'
	],
	[
		'name' => 'Шаблоны',
		'link' => url('templates'),
		'icon' => 'proto'
	],
	[
		'name' => 'Конструктор',
		'link' => url('mailer'),
		'icon' => 'constructor'
	],
	[
		'name' => 'Документация',
		'link' => url('documentation'),
		'icon' => 'docs'
	]
]);
?>

<aside class="column navigation-bar">
    <nav>
        <ul class="menu vertical">
            @foreach($navigation as $item)
                <li class="menu-item{!! url()->current() == url($item['link']) ? ' current-menu-item' : '' !!}">
                    <a href="{{ $item['link'] }}" class="menu-item__link">
                        <svg class="menu-icon">
                            <use xlink:href="#{{ $item['icon'] }}"></use>
                        </svg>
                        {{ $item['name'] }}
                    </a>
                </li>
            @endforeach
        </ul>
    </nav>
</aside>