@extends('body-layout')
    
    <link rel="stylesheet" href="{{ URL::asset('css/main.css') }}" />
    
    @section('content')
    <div id="form_container">
    
        <form class="appnitro"  method="post" action="{{ route('recipes.create') }}">  
            <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />           
            <ul >
                <li id="li_1" >
                    <label class="description" for="element_1">Titulo </label>
                    <div>
                        <input id="element_1" name="title" class="element text medium" type="text" maxlength="255" value=""/> 
                    </div> 
                </li>       
                <li id="li_5" >
                    <label class="description" for="element_5">Tags </label>
                    <div>
                        <input id="element_5" name="tags" class="element text medium" type="text" maxlength="255" value=""/> 
                    </div> 
                </li>       
                <li id="li_2" >
                    <label class="description" for="element_2">Imagen (URL) </label>
                    <div>
                        <input id="element_2" name="photo" class="element text medium" type="text" maxlength="255" value=""/> 
                    </div> 
                </li>       
                <li id="li_3" >
                    <label class="description" for="element_3">Resumen </label>
                    <div>
                        <input id="element_3" name="summary" class="element text medium" type="text" maxlength="255" value=""/> 
                    </div> 
                </li>       
                <li id="li_4" >
                    <label class="description" for="element_4">Pasos </label>
                    <div>
                        <textarea id="element_4" name="description" class="element textarea medium"></textarea> 
                    </div> 
                </li>       
                <li id="li_6" >
                    <label class="description" for="element_6">Precio </label>
                    <div>
                        <input id="element_6" name="price" class="element text medium" type="text" maxlength="255" value=""></input> 
                    </div> 
                </li>
            
                <li class="buttons">
                    <input id="saveForm" class="button_text" type="submit" name="submit" value="Submit" />
                </li>
            </ul>
        </form>
    </div>
    @stop
