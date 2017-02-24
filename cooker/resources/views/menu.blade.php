@extends('body-layout')

    @section('head')
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Cook</title>
        
        <link rel="stylesheet" href="{{ URL::asset('css/main.css') }}" />
    @stop
    
    @section('content')
    <div class="row">
        <div class="twelve columns">
        
            <div class="menu-desc">
                <div class="row">
                    <div class="twelve columns">
                        <h3>LO CLÁSICO</h3>
                    </div>
                </div>
            </div>
        
            <div class="menu-recepie">
                <div class="row">
                    <div class="five columns leftText">
                        <img class="recepieImage" src="http://lorempixel.com/600/400/food">
                    </div>
                    <div class="seven columns leftText">
                        <h4>Titulo</h4><p>Ejemplo de receta</p>   
                    </div>
                </div>
            </div>
            <div class="menu-recepie">
                <div class="row">
                    <div class="five columns leftText">
                        <img class="recepieImage" src="http://lorempixel.com/600/400/food">
                    </div>
                    <div class="seven columns leftText">
                        <h4>Titulo</h4><p>Ejemplo de receta</p>   
                    </div>
                </div>
            </div>
            
            <div class="menu-desc">
                <div class="row">
                    <div class="twelve columns">
                        <h3>LO NUEVO</h3>
                    </div>
                </div>
            </div>
            
            <div class="menu-recepie">
                <div class="row">
                    <div class="five columns leftText">
                        <img class="recepieImage" src="http://lorempixel.com/600/400/food">
                    </div>
                    <div class="seven columns leftText">
                        <h4>Titulo</h4><p>Ejemplo de receta</p>   
                    </div>
                </div>
            </div>
            <div class="menu-recepie">
                <div class="row">
                    <div class="five columns leftText">
                        <img class="recepieImage" src="http://lorempixel.com/600/400/food">
                    </div>
                    <div class="seven columns leftText">
                        <h4>Titulo</h4><p>Ejemplo de receta</p>   
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
