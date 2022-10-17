<!DOCTYPE html>
<html lang="{{ $site->locale->name }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ $site->name }}</title>

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="{{ $site->theme->asset('css/theme.css') }}">

        @if ($fontawesome = $site->theme->config('fontawesome'))
            <script src="https://kit.fontawesome.com/{{ $fontawesome }}.js" crossorigin="anonymous"></script>
        @endif

        <script src="{{ $site->theme->asset('js/theme.js') }}" defer></script>
    </head>
    <body>
        <header id="site-header">
            <div class="container">
                <div class="columns">
                    <div class="column is-3">
                        <h1 id="site-logo">
                            <a href="{{ $site->home() }}">
                                <img
                                    src="{{ $site->theme->asset('img/logo.png') }}"
                                    width="3201"
                                    height="1767"
                                    alt="{{ $site->name }} - {{ $site->description }}"
                                />
                            </a>
                        </h1>
                    </div>
                </div>
            </div>
        </header>

        <main id="site-content">
            @yield('content')
        </main>

        <footer id="site-footer" class="footer">
            <div class="content has-text-centered">
                <p id="copy">&copy; {{ $site->name }} {{ now()->format('Y') }}</p>
            </div>
        </footer>
    </body>
</html>
