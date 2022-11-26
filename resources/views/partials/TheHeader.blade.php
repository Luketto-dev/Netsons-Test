@php
    $navbarLinks = [
        [
            'nome' => 'Home',
            'href' => 'comics.home',
            'name' => 'characters',
        ],
        [
            'nome' => 'Contattaci',
            'href' => 'comics.home',
            'name' => 'comics.index',
        ],
        [
            'nome' => 'Login',
            'href' => 'login',
            'name' => 'movies',
        ],
        [
            'nome' => 'Registrati',
            'href' => 'register',
            'name' => 'tv',
        ],
    ];
@endphp

<header>
    <div class="container">
        <nav class="d-flex py-3">
            <div class="logo">
                <img src="{{url('/public/images/dc-logo.png')}}" alt="">
            </div>
            <ul class="w-100 justify-content-between my-navbar d-flex align-items-center list-unstyled">
                    <div>
                    <li class="my-navbar-item">
                        {{-- A seconda del caso, aggiungo la classe "active" al tag a --}}
                        <a class="p-3 text-uppercase {{ Request::route()->getName() === 'comics.home' ? 'active' : '' }}"
                            href="{{ route('comics.home') }}">
                            Home
                        </a>
                    </li>
                    </div>
                    
                    <div class="d-flex">
                    <li class="my-navbar-item">
                        {{-- A seconda del caso, aggiungo la classe "active" al tag a --}}
                        <a class="p-3 text-uppercase {{ Request::route()->getName() === 'messages.create' ? 'active' : '' }}"
                            href="{{ route('messages.create') }}">
                            Contattaci
                        </a>
                    </li>
                    @guest
                    <li class="my-navbar-item">
                        {{-- A seconda del caso, aggiungo la classe "active" al tag a --}}
                        <a class="p-3 text-uppercase {{ Request::route()->getName() === 'login' ? 'active' : '' }}"
                            href="{{ route('login') }}">
                            login
                        </a>
                    </li>
                    <li class="my-navbar-item">
                        {{-- A seconda del caso, aggiungo la classe "active" al tag a --}}
                        <a class="p-3 text-uppercase {{ Request::route()->getName() === 'register' ? 'active' : '' }}"
                            href="{{ route('register') }}">
                            Registrati
                        </a>
                    </li>
                    @else
                    <li class="my-navbar-item nav-item dropdown ">
                        <a id="navbarDropdown" class="p-3 text-uppercase nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                    </div>
                    @endguest
            </ul>
        </nav>
    </div>
</header>
