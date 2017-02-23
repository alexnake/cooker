<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        @yield('head')
    </head>
    <body>
        <div class="menu">
            @yield('menu')
        </div>
        
        <div class="content">
            @yield('content')
        </div>
        
    </body>
        <div class="footer">
            @yield('footer')
        </div>
</html>