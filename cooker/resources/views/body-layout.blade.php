<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        @yield('head')
    </head>
    <body>
        <div class="menu">
            <div class="row">
                <div class="twelve columns">
                    <div id='menu-nav'>
                      <div id='navigation-bar'>
                        <ul>
                            <li class='menu-sub-nav current-item'>
                                <a href='{{ route('index.index') }}'><i></i><span>Home</span></a>
                            </li>
                            <li class='menu-sub-nav'>
                                <a href='{{ route('menu.index') }}'><i></i><span>Carta</span></a>
                            </li>
                            <li class='menu-sub-nav'>
                                <a href='{{ url('reserve') }}'><i></i><span>Reservar</span></a>
                            </li>
                            <li class='menu-sub-nav'>
                                <a href='{{ route('about.index') }}'><i></i><span>About</span></a>
                            </li>
                        </ul>
                      </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="content">
            @yield('content')
        </div>
        
    </body>
        <div class="footer">
            @yield('footer')
        </div>
</html>