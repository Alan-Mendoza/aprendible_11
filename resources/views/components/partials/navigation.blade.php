{{-- @dump(request()->route()) --}}
<nav>
    <ul>
        <li><a href="{{ route('welcome') }}" class="{{ request()->routeIs('welcome') ? 'text-green-400' : '' }}">Home</a></li>
        <li><a href="{{ route('posts.index') }}" class="{{ request()->routeIs('posts.*') ? 'text-green-400' : '' }}">Blog</a></li>
        <li><a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'text-green-400' : '' }}">Nosotros</a></li>
        <li><a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'text-green-400' : '' }}">Contacto</a></li>
        {{-- <x-nav-link href="{{ route('welcome') }}" :active="request()->routeIs('welcome')">
            Home
        </x-nav-link> --}}
    </ul>
</nav>