<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">
                    @auth    
                        <!--<li class="nav-item">
                            <a class ="nav-link" style="color: #8a2ce2" href="/cliente/direccion">Registrar direccion </a>
                        </li>
                        <li class="nav-item">
                            <a class ="nav-link" style="color: #31e22b" href="/cliente/compra">Registro Compra</a>
                        </li>-->
                        @if(session('perfil')=='admin')
                        <li class="nav-item">
                            <a class ="nav-link" style="color: #e2742b" href="/admin/dashboard/crear">Registrar Responsable</a>
                        </li>
                        <li class="nav-item">
                            <a class ="nav-link" style="color: rgb(0, 0, 0)" href="/admin/dashboard/mostrar">Ver Responsables</a>
                        </li>

                        <li class="nav-item">
                            <a class ="nav-link" style="color: #e2742b" href="/admin/comunicacion/crear">Crear Comunicación</a>
                        </li>
                        <li class="nav-item">
                            <a class ="nav-link" style="color: rgb(0, 0, 0)" href="/admin/comunicacion/mostrar">Ver Comunicaciones</a>
                        </li>

                        <li class="nav-item">
                            <a class ="nav-link" style="color: #e2742b" href="/admin/actividad/crear">Crear Actividad</a>
                        </li>
                        <li class="nav-item">
                            <a class ="nav-link" style="color: rgb(0, 0, 0)" href="/admin/actividad/mostrar">Ver Actividades</a>
                        </li>

                        <li class="nav-item">
                            <a class ="nav-link" style="color: #e22b2b" href="/admin/establecimientos/crear">Registrar Establecimiento</a>
                        </li>
                        <li class="nav-item">
                            <a class ="nav-link" style="color: #2b90e2" href="/admin/establecimientos/mostrar">Ver Establecimientos</a>
                        </li>
                        @endif

                        @if(session('perfil')=='responsable')
                        <li class="nav-item">
                            <a class ="nav-link" style="color: #e2742b" href="/responsable/actividades/crear">Crear Actividad</a>
                        </li>
                        <li class="nav-item">
                            <a class ="nav-link"  href="/responsable/actividades/ver">Ver Actividades</a>
                        </li>

                        <li class="nav-item">
                            <a class ="nav-link" style="color: #e2742b" href="/responsable/comunicaciones/crear">Crear Comunicación</a>
                        </li>
                        <li class="nav-item">
                            <a class ="nav-link" style="color: rgb(0, 0, 0)" href="/responsable/comunicaciones/mostrar">Ver Comunicaciones</a>
                        </li>

                        <li class="nav-item">
                            <a class ="nav-link" style="color: rgb(0, 0, 0)" href="/responsable/responsables/mostrar">Ver Responsables</a>
                        </li>

                        @endif
                        @if(session('perfil')=='visitante')
                        <li class="nav-item">
                            <a class ="nav-link" style="color: #2b90e2"  href="/visitante/actividades/ver">Ver Actividades</a>
                        </li>

                        <li class="nav-item">
                            <a class ="nav-link" style="color: rgb(136, 52, 52)" href="/visitante/responsables/mostrar">Ver Responsables</a>
                        </li>

                        <li class="nav-item">
                            <a class ="nav-link" style="color: #2b90e2" href="/visitante/establecimientos/mostrar">Ver Establecimientos</a>
                        </li>
                        @endif
                    @endauth 
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
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
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            <div class="container">
            @yield('content')
            </div>
        </main>
    </div>
</body>
</html>
