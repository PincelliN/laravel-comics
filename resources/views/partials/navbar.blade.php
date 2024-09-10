<header>
    <div>
        <img src="/img/dc-logo.png" alt="">
        <nav>
            <ul>
                @foreach ($nav_menues as $menu)
                    <li>
                        <a
                            href="{{ $menu['name'] === 'characters' ? route('home') : route($menu['name']) }} ">{{ $menu['text'] }}</a>
                    </li>
                @endforeach

            </ul>
        </nav>
    </div>
</header>
