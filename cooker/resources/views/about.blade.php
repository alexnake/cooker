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
        
            <div class="main-image">
                <div class="row">
                    <div class="twelve columns">
                        <img class="aboutMainImage" src="http://lorempixel.com/1024/480/food">
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="eight columns">
                    <div class="aboutTextBox">
                        <p>asd</p>
                    </div>
                </div>
                <div class="four columns aboutImage">
                    <img class="" src="http://lorempixel.com/320/190/food">
                    <img class="" src="http://lorempixel.com/320/190/food">
                </div>
            </div>
            
            <div class="row">
                <div class="four columns">
                    <div class="aboutTextBox">
                        <p>asd</p>
                    </div>
                </div>
                <div class="eight columns aboutImage">
                    <img class="" src="http://lorempixel.com/620/360/food">
                </div>
            </div>
            
            <div class="row">
                <div class="twelve columns">
                    <div class="aboutTextBox">
                        <p>asd</p>
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
