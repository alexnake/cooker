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
                          <li class='menu-sub-nav current-item'><a href='/'><i></i><span>Home</span></a></li>
                          <li class='menu-sub-nav'><a href='{{ url('menu') }}'><i></i><span>Carta</span></a></li>
                          <li class='menu-sub-nav'><a href='{{ url('reserve') }}'><i></i><span>Reservar</span></a></li>
                        </ul>
                      </div>
                      <div id='search-bar'>
                        <!--<form action='nothing'>-->
                          <input type='text' name='search' id='searchfld' placeholder='Enter your query and hit enter'/>
                        <!--</form>-->
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