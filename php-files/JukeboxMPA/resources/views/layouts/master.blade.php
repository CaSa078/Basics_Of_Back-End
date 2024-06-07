<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="/css/style.css">
    @stack('styles')
</head>
<body>
    <div class="page">
        <div class="page__header">
            <nav class="menu">
                <ul class="menu__list">
                    <li class="menu__item"><a class="menu__link" href="/home">Home</a></li>
                    <li class="menu__item"><a class="menu__link" href="/songs">Songs</a></li>
                    <li class="menu__item"><a class="menu__link" href="/genres">Genres</a></li>
                    <li class="menu__item"><a class="menu__link" href="/playlist">Playlist</a></li>
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
