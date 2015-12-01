<!DOCTYPE html>
<html>
    <head>
        <title>@yield('title')</title>
        
        <link rel="stylesheet" href="{{ elixir('css/app.css') }}">
        @yield('head')
    </head>
    <body>
        <div class="container">
            <div class="content">
                @yield('content')
            </div>
        </div>
            
        <script src="{{ elixir('js/app.js') }}"></script>
        
        @if ( Config::get('app.debug') )
          <script type="text/javascript">
            document.write('<script src="//localhost:35729/livereload.js?snipver=1" type="text/javascript"><\/script>')
          </script>
        @endif
    </body>
</html>
