<!DOCTYPE html>
<html lang="{{ $site->locale->name }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ isset($title) ? "{$title} | {$site->name}" : "{$site->name}" }}</title>

        @if ($typekit = $site->theme->config('typekit'))
            <link rel="stylesheet" href="https://use.typekit.net/{{ $typekit }}.css">
        @endif

        <link rel="stylesheet" href="{{ $site->theme->asset('css/theme.css') }}">

        @if ($fontawesome = $site->theme->config('fontawesome'))
            <script src="https://kit.fontawesome.com/{{ $fontawesome }}.js" crossorigin="anonymous"></script>
        @endif

        <script src="{{ $site->theme->asset('js/jquery/jquery.min.js') }}" defer></script>
        <script src="{{ $site->theme->asset('js/theme.js') }}" defer></script>
    </head>
    <body>
        <header id="site-header">
            <div class="container">
                <div class="level">
                    <div class="level-left">
                        <div class="level-item">
                            <h1 id="site-logo">
                                <a href="{{ $site->home() }}">
                                    <img
                                        src="{{ $site->theme->asset('img/logo.png') }}"
                                        width="300"
                                        height="120"
                                        alt="{{ $site->name }} - {{ $site->description }}"
                                    />
                                </a>
                            </h1>
                        </div>
                    </div>

                    <div class="level-right">
                        <div class="level-item">
                            {!! $site->menu('primary') !!}
                        </div>

                        @if (false && $skeddaUrl = $site->theme->config('skedda_url'))
                            <div class="level-item">
                                <a
                                    class="button is-primary"
                                    href="{{ $skeddaUrl }}"
                                    target="_blank"
                                >
                                    <span>{{ $site->trans('base.reserve') }}</span>
                                    <span class="icon"><i class="fa-solid fa-arrow-right-long"></i></span>
                                </a>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </header>

        <main id="site-content">
            @yield('content')
        </main>

        <footer id="site-footer" class="footer">
            <div class="container">
                <div class="level">
                    <div class="level-left">
                        <div class="level-item">
                            <p id="copy">&copy; {{ $site->name }} {{ now()->format('Y') }}</p>
                        </div>
                    </div>

                    <div class="level-right">
                        <div class="level-item">
                            <p id="by">
                                <a href="https://limestone.dev" target="_blank">
                                    {{ $site->trans('base.devBy') }}
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </body>
</html>
