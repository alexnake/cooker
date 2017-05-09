@extends('body-layout')

    @section('head')
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Hoy cocina manero - Algo sobre mi</title>
        
        <link rel="stylesheet" href="{{ URL::asset('css/main.css') }}" />
    @stop
    
    @section('content')
    <div class="row">
        <div class="twelve columns">
        
            <div class="main-image">
                <div class="row">
                    <div class="twelve columns">
                        <img class="aboutMainImage" src="http://lorempixel.com/1024/480/food" alt="Manero image" title="Manero imagen">
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="eight columns">
                    <div class="aboutTextBox">
                        <h2>¿Quién soy?</h2>
                        <p>Mi nombre es Alejandro Manero, ingeniero informático de profesión, cocinero de vocación. Creé esta página para poder compartir con los demás mi gusto por la cocina, ya sea mediante la degustación o el aprendizaje.</p>
                        <p>Mi aprendizaje en cocina va desde cursos de un solo día en lugares como <a href="https://www.kitchenclub.es" target="_blank">The Kitchen Club</a> hasta el título superior en cocina española en <a href="https://www.cordonbleu.edu/madrid/inicio/es" target="_blank">Le Cordon Bleu</a>, donde he estado un año y medio formandome a nivel profesional.</p>
                        <p>La cocina no es solo un medio de supervivencia. La gente disfruta comiendo, y eso es lo que busco. <strong>Que la gente disfrute.</strong></p>
                        <p>Ya sea para una noche romántica, para una cena con amigos, o para aprender a realizar el plato que más te gusta, puedes ponerte en contacto conmigo y nos pondremos manos a la obra.</p>
                    </div>
                </div>
                <div class="four columns aboutImage">
                    <img class="" src="http://lorempixel.com/320/190/food" alt="Manero imagen" title="Manero image">
                    <img class="" src="http://lorempixel.com/320/190/food" alt="Manero imagen" title="Manero image">
                </div>
            </div>
            
            <div class="row">
                <div class="four columns">
                    <div class="aboutTextBox marginTop2">
                        <h2>Pero, ¿qué ofrezco?</h2>
                        <p>En esta página podrás encontrar una <a href="{{ route('menu.index') }}">carta</a>, donde se detallan los platos que puedo preparar para cualquier evento que quieras organizar. Además, podras encontrar, en el apartado de <a href="#">cursos</a>, distintos menus para preparar con las personas que quieras, enseñando paso a paso todo el proceso de <strong>creación</strong>.</p>
                    </div>
                </div>
                <div class="eight columns aboutImage">
                    <img class="" src="http://lorempixel.com/620/360/food" alt="Manero imagen" title="Manero imagen">
                </div>
            </div>
            
            <div class="row">
                <div class="twelve columns">
                    <div class="aboutTextBox">
                        <h2>Contacto</h2>
                        <p>Si deseas realizar una reserva para realizar un curso o un evento, puedes contactar mediante la página <a href="{{ url('reserve') }}">reservas</a>, donde podrás agregar una descripción de lo que tienes en mente, y me pondré en contacto contigo lo más pronto posible para concretar los detalles.</p>
                        <p>Para solicitar información, puedes llamarme al telefono 628 81 65 03, o bien mandarme un <a href="mailto:alexnake1@gmail.com">email</a> a alexnake1@gmail.com</p>
                        <p>
                            <a target="_blank" title="Sígueme en Facebook" href="http://www.facebook.com/"><img alt="Sígueme en facebook" src="//login.create.net/images/icons/user/facebook_40x40.png" border=0></a>
                            <a target="_blank" title="Sígueme en Instagram" href="https://www.instagram.com/hoycocinamanero"><img alt="Sígueme en Instagram" src="https://c866088.ssl.cf3.rackcdn.com/assets/instagram40x40.png" border=0></a>
                        </p>
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
