<!DOCTYPE html>
<html lang="{{ $site->locale->name }}">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <title>{{ isset($title) ? "{$title} | {$site->name}" : "{$site->name}" }}</title>

        @if ($favicon = $site->theme()->config('favicon'))
            <link rel="icon" type="image/png" href="{{ $favicon }}" />
        @endif

        @if ($typekit = $site->theme()->config('typekit'))
            <link rel="stylesheet" href="https://use.typekit.net/{{ $typekit }}.css" />
        @endif

        <link rel="stylesheet" href="{{ $site->theme()->asset('css/theme.css') }}" />

        @if ($fontawesome = $site->theme()->config('fontawesome'))
            <script src="https://kit.fontawesome.com/{{ $fontawesome }}.js" crossorigin="anonymous"></script>
        @endif

        <script src="{{ $site->theme()->asset('js/jquery/jquery.min.js') }}" defer></script>
        <script src="{{ $site->theme()->asset('js/theme.js') }}" defer></script>
    </head>
    <body>
        <header id="site-header">
            <div class="container">
                <div class="level">
                    <div class="level-left">
                        <div class="level-item">
                            <h1 id="site-logo">
                                <a href="{{ $site->home() }}">
                                    @if ($logo = $site->theme()->config('logo'))
                                        <img
                                            src="{{ $logo }}"
                                            alt="{{ $site->name }} - {{ $site->description }}"
                                        />
                                    @endif
                                </a>
                            </h1>
                        </div>
                    </div>

                    <div class="level-right">
                        <div class="level-item">
                            {!! $site->menu('primary') !!}
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <main id="site-content">
            @yield('content')
        </main>

        <footer id="site-footer" class="footer">
            <div class="container">
                <div class="columns">
                    <div class="column is-6">
                        {!! $site->menu('footer') !!}
                    </div>

                    <div class="column is-6">
                        <div id="footer-copy">
                            <a href="{{ $site->home() }}">
                                &copy; {{ $site->name }} {{ now()->format('Y') }}
                            </a>

                            &bull;

                            <a href="https://limestone.dev" target="_blank">
                                {{ $site->trans('base.forgedBy') }}
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </body>
</html>
