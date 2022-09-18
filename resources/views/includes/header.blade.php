@php
    $main_menu = config('main_menu');
@endphp

<header id="main-header">
    <nav class="container">
        <figure>
            <a href="#">
                <img src="/img/dc-logo.png" alt="DC Comics Logo">
            </a>
        </figure>

        <ul>
            @foreach ($main_menu as $item)
                <li>
                    <a href="{{ route($item['route']) }}" class="{{ Route::is($item['route']) ? 'active' : '' }}">{{ $item['anchor'] }}</a>
                </li>
            @endforeach
        </ul>
    </nav>
</header>