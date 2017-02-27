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
                          <li class='menu-sub-nav current-item'><a href='{{ route('index.index') }}'><i class='fa fa-home'></i><span>Home</span></a></li>
                          <li class='menu-sub-nav'><a href='{{ route('menu.index') }}'><i class='fa fa-cogs'></i><span>Carta</span></a></li>
                          <li class='menu-sub-nav'><a href='#'><i class='fa fa-user'></i><span>About</span></a></li>
                          <li class='menu-sub-nav'><a href='{{ url('reserve') }}'><i class='fa fa-book'></i><span>Reservar</span></a></li>
                          <li class='menu-sub-nav' id='searchbox'><a href='#'><i class='fa fa-search'></i><span>Search</span></a></li>
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