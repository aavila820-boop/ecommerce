<style>
    :root {
        --nav-bg: rgba(255, 255, 255, 0.65);
        --nav-border: rgba(255, 255, 255, 0.35);
        --nav-shadow: 0 12px 30px rgba(0, 0, 0, .12);
        --nav-link: #2a2a2a;
        --nav-link-muted: #60666c;
        --nav-link-active: #007AFF;
        --cyan: #00BCD4;
    }

    /* Glass navbar */
    .et-navbar {
        background: linear-gradient(180deg, rgba(255, 255, 255, .75), rgba(255, 255, 255, .55));
        backdrop-filter: blur(10px);
        -webkit-backdrop-filter: blur(10px);
        border-bottom: 1px solid var(--nav-border);
        box-shadow: var(--nav-shadow);
        padding-top: .6rem;
        padding-bottom: .6rem;
    }

    /* Brand badge (tu versión) */
    .brand-badge {
        display: inline-flex;
        align-items: center;
        gap: 12px;
        padding: 12px 16px;
        border-radius: 9px;
        border: 1px solid rgba(255, 255, 255, .25);
        background: rgba(255, 255, 255, .08);
        font-weight: 700;
        font-size: .95rem;
        margin-bottom: 0;
    }

    .brand-badge svg {
        display: block;
        width: 44px;
        height: 50px;
    }

    .navbar-brand {
        padding: 0;
        color: #0b1736;
        font-weight: 800;
        letter-spacing: .2px;
    }

    /* Links */
    .et-navbar .nav-link {
        color: var(--nav-link-muted);
        font-weight: 600;
        padding: .55rem .9rem;
        border-radius: .6rem;
        transition: color .2s ease, background-color .2s ease, box-shadow .2s ease;
    }

    .et-navbar .nav-link:hover {
        color: var(--nav-link-active);
        background: rgba(0, 122, 255, .08);
        box-shadow: 0 6px 14px rgba(0, 122, 255, .12) inset;
    }

    .et-navbar .nav-link.active {
        color: var(--nav-link-active);
        background: rgba(0, 122, 255, .12);
        border: 1px solid rgba(0, 122, 255, .25);
    }

    /* Auth buttons (derecha) */
    .btn-auth-outline {
        border: 2px solid var(--cyan);
        padding: .5rem 1rem;
        border-radius: .8rem;
        font-weight: 800;
        color: #0b1736;
        background: transparent;
        transition: .2s;
        text-decoration: none;
        display: inline-block;
    }

    .btn-auth-outline:hover {
        background: rgba(0, 188, 212, .15);
    }

    .btn-auth-fill {
        background: linear-gradient(180deg, #007AFF, #0063CC);
        color: #fff;
        padding: .55rem 1rem;
        border-radius: .8rem;
        font-weight: 800;
        border: none;
        box-shadow: 0 8px 18px rgba(0, 122, 255, .35);
        text-decoration: none;
        display: inline-block;
    }

    .btn-auth-fill:hover {
        filter: brightness(1.05);
    }

    /* Dropdown */
    .dropdown-menu {
        border-radius: .8rem;
        border: 1px solid rgba(0, 0, 0, .06);
    }

    .dropdown-item {
        font-weight: 600;
    }

    .dropdown-item:hover {
        background: #f3f7ff;
        color: #0b1736;
    }

    /* Avatar chimbo con inicial */
    .avatar-initials {
        width: 28px;
        height: 28px;
        border-radius: 50%;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        background: linear-gradient(180deg, #007AFF, #2EA6FF);
        color: #fff;
        font-weight: 900;
        font-size: .9rem;
    }

    /* Mobile: separación y botones full-width si quieres */
    @media (max-width: 992px) {

        .btn-auth-outline,
        .btn-auth-fill {
            margin-top: .5rem;
        }
    }
</style>

{{-- NAVBAR — Glass Tech --}}
<nav class="et-navbar navbar navbar-expand-lg sticky-top">
    <div class="container">
        {{-- Brand --}}
        <a class="navbar-brand d-flex align-items-center gap-2" href="{{ url('/') }}">
            <span class="brand-badge m-0">
                <svg width="44" height="50" viewBox="0 0 24 27" fill="none" xmlns="http://www.w3.org/2000/svg"
                    aria-hidden="true">
                    <path
                        d="M19.5692 27H10.725V17.8542L19.5692 18.3674V27ZM3.46155 27H2.76924C2.40543 27.001 2.04505 26.9298 1.70895 26.7906C1.37284 26.6513 1.06768 26.4468 0.811167 26.1888C0.553205 25.9323 0.348689 25.6272 0.209454 25.291C0.0702194 24.9549 -0.000972094 24.5946 1.00246e-05 24.2308V2.76924C-0.000972094 2.40544 0.0702194 2.04505 0.209454 1.70895C0.348689 1.37284 0.553205 1.06769 0.811167 0.811163C1.06771 0.553212 1.37284 0.348702 1.70895 0.209468C2.04505 0.0702341 2.40544 -0.000959608 2.76924 9.76757e-06H21.2308C21.5946 -0.000959608 21.955 0.0702341 22.2911 0.209468C22.6272 0.348702 22.9323 0.553212 23.1888 0.811163C23.4468 1.06769 23.6513 1.37284 23.7905 1.70895C23.9298 2.04505 24.001 2.40544 24 2.76924V24.2308C24.001 24.5945 23.9299 24.9549 23.7907 25.291C23.6515 25.6271 23.447 25.9323 23.1891 26.1888C22.9325 26.4468 22.6273 26.6514 22.2912 26.7906C21.955 26.9299 21.5946 27.001 21.2308 27H20.4923V17.4962L18.4041 17.3751V10.7172L20.2502 10.9348V10.9334L20.2608 10.9408L20.7801 10.1774L11.9721 4.18639L3.249 10.1049L3.7673 10.8688L3.7844 10.8572L5.55878 10.5612V17.313L3.46155 17.4842V27ZM9.80214 27H4.38462V18.3348L9.80214 17.8927V27ZM17.4808 17.3215L10.7255 16.9292V16.8907L10.6768 16.8946V9.83077L17.4812 10.6366V17.3213L17.4808 17.3215ZM14.0769 11.0769C12.9316 11.0769 12 12.2155 12 13.6154C12 15.0152 12.9316 16.1538 14.0769 16.1538C15.2222 16.1538 16.1538 15.0152 16.1538 13.6154C16.1538 12.2155 15.2222 11.0769 14.0769 11.0769ZM6.48185 17.2385V10.4589L9.75324 9.88869V16.9715L6.48185 17.2385ZM8.19209 11.3077C7.49216 11.3077 6.92286 12.3946 6.92286 13.7308C6.92286 15.0669 7.49216 16.1538 8.19209 16.1538C8.89201 16.1538 9.46132 15.0669 9.46132 13.7308C9.46132 12.3946 8.89178 11.3077 8.19209 11.3077ZM15.1352 15.078L12.9932 15.0058V12.2665L15.1355 12.3796V15.0778L15.1352 15.078ZM8.76025 15.0263H7.45454V12.4973L8.76025 12.4209V15.0263ZM18.5995 9.81093L10.9237 8.90654L12.2019 5.45839L18.5998 9.81046L18.5995 9.81093ZM5.61509 9.6157L11.0414 5.93424L9.94454 8.89339L5.61532 9.61593L5.61509 9.6157Z"
                        fill="white" />
                </svg>
                ecommerse
            </span>
        </a>

        {{-- Toggler --}}
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMain"
            aria-controls="navbarMain" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        {{-- Links --}}
        <div class="collapse navbar-collapse" id="navbarMain">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link @if (Request::routeIs('home')) active @endif"
                        href="{{ url('/') }}">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @if (Request::routeIs('shop.*')) active @endif"
                        href="{{ route('shop.index') }}">Tienda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @if (Request::routeIs('offers.*')) active @endif"
                        href="{{ route('offers.index') }}">Ofertas</a>
                </li>
            </ul>

            <ul class="navbar-nav ms-auto align-items-lg-center">
                @guest
                    @if (Route::has('login'))
                        <li class="nav-item me-lg-2">
                            <a class="btn btn-auth-outline" href="{{ route('login') }}">Iniciar sesión</a>
                        </li>
                    @endif
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="btn btn-auth-fill" href="{{ route('register') }}">Crear cuenta</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item me-3 d-none d-lg-block">
                        <a class="nav-link" href="{{ route('cart.index') }}">Carrito</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link d-flex align-items-center gap-2 dropdown-toggle"
                            href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false" v-pre>
                            <span class="avatar-initials">{{ strtoupper(substr(Auth::user()->name, 0, 1)) }}</span>
                            {{ Str::limit(Auth::user()->name, 18) }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-end shadow-lg" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('profile.show') }}">Mi perfil</a>
                            <a class="dropdown-item" href="{{ route('orders.index') }}">Mis pedidos</a>
                            <hr class="dropdown-divider">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">@csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
