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
                    <a href="{{ $item['url'] }}">{{ $item['anchor'] }}</a>
                </li>
            @endforeach
        </ul>
    </nav>
</header>