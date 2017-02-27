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
            <div class="row">
                <div class="eight columns divMainImage">
                    <img class="mainImage" src="{{ $indexRecipes[0]->photo }}">
                    <h3>{{ $indexRecipes[0]->title }}</h3>
                    <p>
                        {{ $indexRecipes[0]->summary }}
                    </p>     
                    <p>
                        {{ $indexRecipes[0]->description }}
                    </p>                  
                </div>
        
                <div class="four columns">
                    <h4>Últimas recetas</h4>
                    <div class="last-recepies">
                    
                        @for ($i=1; $i < count($indexRecipes) ;$i++)
                    
                            <div class="recepie-sidebar">
                                <div class="seven columns">
                                    <img class="" src="{{ $indexRecipes[$i]->photo }}">
                                </div>
                                <div class="five columns lineBreak">
                                    <h4>{{ $indexRecipes[$i]->tittle }}</h4><p>{{ $indexRecipes[$i]->summary }}</p>   
                                </div>
                            </div> 
                        @endfor
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
