<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="icon" href="{{ asset('images/logo.jpg') }}" type="image/jpg">
    <link rel="stylesheet" href="/css/style.css">
    @stack('styles')
</head>
<body>
    <div class="page">
        <div class="page__header">
            <nav class="menu">
                <ul class="menu__list">
                    <li class="menu__item"><a class="menu__link" href="/home">Home</a></li>
                    <li class="menu__item menu__item--dropdown">
                        <a class="menu__link" href="/songs/all">Songs</a>
                        <ul class="menu__dropdown">
                            <li class="menu__dropdown-item"><a class="menu__dropdown-link" href="/songs/create">Create Song</a></li>
                        </ul>
                    </li>
                    <li class="menu__item menu__item--dropdown">
                        <a class="menu__link" href="/genres/all">Genres</a>
                        <ul class="menu__dropdown">
                            <li class="menu__dropdown-item"><a class="menu__dropdown-link" href="/genres/create">Create Genre</a></li>
                        </ul>
                    </li>
                    <li class="menu__item menu__item--dropdown">
                        <a class="menu__link" href="/playlist/all">Playlist</a>
                        <ul class="menu__dropdown">
                            <li class="menu__dropdown-item"><a class="menu__dropdown-link" href="/playlist/create">Create Playlist</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>

        <div class="page__content">
            @yield('content')
        </div>

        <div class="page__footer">
            <footer class="footer">
                <p class="footer__text">&copy; 2024 CasaDev1's Jukebox</p>
            </footer>
        </div>
    </div>
</body>
</html>
