<header class>
    <div class="container">
        <img src="{{ asset('images/marchio-sito-test.png') }}" alt="Logo La Molisana">
        <nav>
            <ul>
                @foreach (config('menu') as $menuItem)
                    {{-- <li><a class="{{ Route::currentRouteName() === $menuItem['route'] ? 'active' : '' }}" href="{{ route($menuItem['route']) }}">{{ $menuItem['label'] }}</a></li> --}}
                    <li><a class="
                        @if (Route::currentRouteName() === $menuItem['route'])
                            active
                        @endif
                    "
                    href="{{ route($menuItem['route']) }}">{{ $menuItem['label'] }}</a></li>
                @endforeach
            </ul>
        </nav>
    </div>
</header>
