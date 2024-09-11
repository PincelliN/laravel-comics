<header>
    <div>
        <a href="{{ route('home') }}">
            <img src={{ Vite::asset('resources\img\dc-logo.png') }} alt="">
        </a>

        <nav>
            <ul>
                @foreach ($nav_menues as $menu)
                    <li>{{-- Controlla se la rotta corrente corrisponde al valore di $menu['name']
                        Gestisce un caso speciale: se il menu è 'characters' e la rotta corrente è 'home', aggiungi 'active' --}}
                        <a class="{{ Route::currentRouteName() === $menu['name'] ||
                        ($menu['name'] === 'characters' && Route::currentRouteName() === 'home')
                            ? 'active'
                            : '' }}"
                            {{--  Verifica se il menu corrente è 'characters'. Se è vero, il link punta alla rotta 'home'. Altrimenti, punta alla rotta specificata da $menu['name'] --}}
                            href="{{ $menu['name'] === 'characters' ? route('home') : route($menu['name']) }} ">
                            {{ $menu['text'] }}
                        </a>
                    </li>
                @endforeach
            </ul>
        </nav>
    </div>
</header>
