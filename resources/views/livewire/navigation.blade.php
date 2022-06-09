<nav class="navbar navbar-expand-lg navbar-light bg-white container">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">
            <img src="{{ asset('storage/recursos/olivar_min.png') }}" alt="" width="120" height="80">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse ml-4 menu-bar" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link active items-menu-navbar" aria-current="page" href="/">Home</a>
                <span class="mx-5 d-none d-lg-block p-2">|</span>
                <a class="nav-link items-menu-navbar" href="{{ route('carta.index') }}">Carta</a>
                <span class="mx-5 d-none d-lg-block p-2">|</span>
                <a class="nav-link items-menu-navbar" href="{{ route('contact-us.index') }}">Contactanos</a>
                <span class="mx-5 d-none d-lg-block p-2">|</span>
                <a class="nav-link items-menu-navbar" href="{{ route('booking.index') }}">Reservas</a>
                {{-- <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a> --}}

                {{-- menu movil --}}
                <hr class="hide-elements">

                {{-- <a href="" class="nav-link hide-elements">Iniciar sesión</a>
                <a href="" class="nav-link hide-elements">Registrarse</a> --}}


                @auth
                    <a href="{{ route('profile.show') }}" class="menu-user-movil hide-elements">
                        <span>
                            <i class="far fa-address-card"></i>
                        </span>
                        Perfil
                    </a>
                    <a href="" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit()" class="menu-user-movil hide-elements">
                        <span>
                            <i class="fas fa-sign-out-alt"></i>
                        </span>
                        Cerrar sesión
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="post" class="hidden">
                        @csrf
                    </form>

                @else
                    <a href="" class="menu-user-movil hide-elements">
                        <span class="position-relative">
                            <i class="fas fa-shopping-cart"></i>
                            {{-- //Cuando el carro tiene elementos

                                <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                99+
                                <span class="visually-hidden">unread messages</span>
                            </span> --}}

                            {{-- cuando el carro esta vacío --}}
                            <span
                                class="position-absolute top-0 start-100 translate-middle badge border border-light rounded-circle bg-danger p-2">
                                <span class="visually-hidden">New alerts</span>
                            </span>
                        </span>
                        <span class="text-menu-movil">
                            Carrito de compras
                        </span>
                        
                    </a>                  

                    <a href="{{ route('login') }}" class="menu-user-movil hide-elements">
                        <span>
                            <i class="fas fa-user-circle"></i>
                        </span>
                        <span class="text-menu-movil">
                            Iniciar sesión
                        </span>
                    </a>

                    <a href="{{ route('register') }}" class="menu-user-movil hide-elements">
                        <span>
                            <i class="fas fa-fingerprint"></i>
                        </span>
                        <span class="text-menu-movil">
                            Registrarse
                        </span>
                    </a>
                @endauth

                {{-- fin menu movil --}}
            </div>
        </div>

        {{-- probando --}}
        @livewire('cart.cart-icon')
        {{-- fin probando  --}}

        <div class="phone-navbar d-none d-lg-block">
            <i class="fas fa-phone-volume"></i>
            <p>(01)548-6390</p>
        </div>


        {{-- menu computer --}}
        <div class="user-login d-none d-lg-block" role="navigation">

            {{-- <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-user-circle"></i>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item items-menu-navbar" href="#">Iniciar sesión</a></li>
                        <li><a class="dropdown-item items-menu-navbar" href="#">Registrarse</a></li>
                    </ul>
                </li>
            </ul> --}}
            <ul class="navbar-nav">
                @auth
                    <x-jet-dropdown align="right" width="48" id="menu-login">
                        <x-slot name="trigger">

                            <button
                                class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                                <img class="h-8 w-8 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}"
                                    alt="{{ Auth::user()->name }}" />
                            </button>

                        </x-slot>

                        <x-slot name="content">
                            <!-- Account Management -->
                            <div class="block px-4 py-2 text-xs text-gray-400">
                                {{ __('Manage Account') }}
                            </div>

                            <x-jet-dropdown-link href="{{ route('profile.show') }}">
                                {{ __('Profile') }}
                            </x-jet-dropdown-link>

                            <div class="border-t border-gray-100"></div>

                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <x-jet-dropdown-link href="{{ route('logout') }}" onclick="event.preventDefault();
                                                                        this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </x-jet-dropdown-link>
                            </form>
                        </x-slot>
                    </x-jet-dropdown>
                @else
                    <x-jet-dropdown align="right" width="48" id="menu-login">
                        <x-slot name="trigger">
                            <i class="fas fa-user-circle user-login"></i>
                        </x-slot>

                        <x-slot name="content">

                            <x-jet-dropdown-link href="{{ route('login') }}">
                                {{ __('Iniciar sesión') }}
                            </x-jet-dropdown-link>

                            <x-jet-dropdown-link href="{{ route('register') }}">
                                {{ __('Registrarse') }}
                            </x-jet-dropdown-link>
                        </x-slot>

                    </x-jet-dropdown>
                @endauth
            </ul>
        </div>
        {{-- fin menu computer --}}
    </div>
</nav>
