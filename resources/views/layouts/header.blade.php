<head>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Fullcalendar -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.0/main.css">
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.0/main.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.0/locales-all.js"></script>
</head>
<header class="header">
    <nav class="navbar">
        <!-- Link a la página principal -->
        <div class="nav-element">
            <a href="{{ url('/') }}" class="left">InformaticsGuards | MaaS</a>
        </div>
        <!-- Link de autenticación -->
        @guest
            @if (Route::has('login'))
                <div class="nav-element">
                    <a href="{{ url('/auth/login') }}" class="right">Iniciar Sesion</a>
                </div>
            @endif
            @if (Route::has('register'))
                <div class="nav-element">
                    <a href="{{ url('/auth/register') }}" class="right">Registrar</a>
                </div>
            @endif
        @else
            <div class="nav-element">
                <a href="#">{{ Auth::usuairo()->Nombre }}</a>
                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                <form action="{{ route('logout') }}" method="post">
                    @csrf
                </form>
            </div>
        @endguest
    </nav>
</header>
<script src="{{ asset('js/agenda.js') }}" defer></script>
