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