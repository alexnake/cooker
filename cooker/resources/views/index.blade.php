@extends('body-layout')

    @section('head')
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Cook</title>
        
        <link rel="stylesheet" href="{{ URL::asset('css/main.css') }}" />
    @stop
    
    @section('menu')
    <div class="row">
        <div class="twelve columns">
            <div id='menu-nav'>
              <div id='navigation-bar'>
                <ul>
                  <li class='menu-sub-nav current-item'><a href='/'><i class='fa fa-home'></i><span>Home</span></a></li>
                  <li class='menu-sub-nav'><a href='#'><i class='fa fa-cogs'></i><span>Widgets</span></a></li>
                  <li class='menu-sub-nav'><a href='#'><i class='fa fa-user'></i><span>About</span></a></li>
                  <li class='menu-sub-nav'><a href='#'><i class='fa fa-book'></i><span>Contact</span></a></li>
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
    @stop
    
    @section('content')
    <div class="row">
        <div class="twelve columns">
            <div class="row">
                <div class="eight columns divMainImage">
                    <img class="mainImage" src="http://lorempixel.com/600/400/food" alt="Mountain View">
                    <h3>Nueva receta.</h3>
                    <p>
                        Descripción nueva receta.
                    </p>                  
                </div>
        
                <div class="four columns">
                    <h4>Últimas recetas</h4>
                    <div class="last-recepies">
                        <div class="recepie-sidebar">
                            <div class="seven columns">
                                <img class="" src="http://lorempixel.com/600/400/food" alt="Mountain View">
                            </div>
                            <div class="five columns">
                                <h4>Titulo</h4><p>Ejemplo de receta</p>   
                            </div>
                        </div> 
                        <div class="recepie-sidebar">
                            <div class="seven columns">
                                <img class="" src="http://lorempixel.com/600/400/food" alt="Mountain View">
                            </div>
                            <div class="five columns">
                                <h4>Titulo</h4><p>Ejemplo de receta</p>   
                            </div>
                        </div> 
                        <div class="recepie-sidebar">
                            <div class="seven columns">
                                <img class="" src="http://lorempixel.com/600/400/food" alt="Mountain View">
                            </div>
                            <div class="five columns">
                                <h4>Titulo</h4><p>Ejemplo de receta</p>   
                            </div>
                        </div> 
                        <div class="recepie-sidebar">
                            <div class="seven columns">
                                <img class="" src="http://lorempixel.com/600/400/food" alt="Mountain View">
                            </div>
                            <div class="five columns">
                                <h4>Titulo</h4><p>Ejemplo de receta</p>   
                            </div>
                        </div> 
                        <div class="recepie-sidebar">
                            <div class="seven columns">
                                <img class="" src="http://lorempixel.com/600/400/food" alt="Mountain View">
                            </div>
                            <div class="five columns">
                                <h4>Titulo</h4><p>Ejemplo de receta</p>   
                            </div>
                        </div> 
                        <div class="recepie-sidebar">
                            <div class="seven columns">
                                <img class="" src="http://lorempixel.com/600/400/food" alt="Mountain View">
                            </div>
                            <div class="five columns">
                                <h4>Titulo</h4><p>Ejemplo de receta</p>   
                            </div>
                        </div> 
                        <div class="recepie-sidebar">
                            <div class="seven columns">
                                <img class="" src="http://lorempixel.com/600/400/food" alt="Mountain View">
                            </div>
                            <div class="five columns">
                                <h4>Titulo</h4><p>Ejemplo de receta</p>   
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
        </div>
    </div>
    @stop
    
    @section('footer')
        <script type="text/javascript" src="{{ URL::asset('js/jquery-3.1.1.min.js') }}"></script>
        <script type="text/javascript" src="{{ URL::asset('js/main.js') }}"></script>
    @stop  
