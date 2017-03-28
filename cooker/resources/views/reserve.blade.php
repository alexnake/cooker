@extends('body-layout')

    @section('head')
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Cook</title>
        
        <link rel="stylesheet" href="{{ URL::asset('css/main.css') }}" />
        <link rel="stylesheet" href="{{ URL::asset('css/font-awesome/css/font-awesome.min.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('css/sweetalert.css') }}">
    @stop
    
    @section('content')
    <div class="row">
        <div class="twelve columns">
            <form method="post" action="{{ route('reserve.make_reserve') }}">
                <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
                <div class="contentform">

                    <div class="row">
                        <div class="six columns">
                            <div class="form-group">
                                <p>Nombre<span>*</span></p>
                                <span class="icon-case"><i class="fa fa-male"></i></span>
                                <input type="text" class="contactInput" name="name" id="nom" data-rule="required" data-msg="Debe insertar un nombre." required/>
                                <div class="validation"></div>
                            </div>

                            <div class="form-group">
                                <p>Teléfono <span>*</span></p>  
                                <span class="icon-case"><i class="fa fa-phone"></i></span>
                                <input class="contactInput" type="text" name="phone" id="phone" data-rule="maxlen:10" data-msg="Verifique el telefono." required/>
                                <div class="validation"></div>
                            </div>

                            <div class="form-group">
                                <p>E-mail <span>*</span></p>    
                                <span class="icon-case"><i class="fa fa-envelope-o"></i></span>
                                <input class="contactInput" type="email" name="email" id="email" data-rule="email" data-msg="El campo E-mail es obligatorio." required/>
                                <div class="validation"></div>
                            </div> 

                            <div class="form-group">
                                <p>Fecha <span>*</span></p>    
                                <span class="icon-case"><i class="fa fa-envelope-o"></i></span>
                                <input class="contactInput"  type="text" name="date" id="datepicker" required>
                                <div class="validation"></div>
                            </div> 
                        </div>
                    
                        <div class="six columns">
                            <div class="form-group">
                            <p>Mensaje</p>
                            <span class="icon-case"><i class="fa fa-comments-o"></i></span>
                                <textarea name="message" rows="14" data-rule="required" data-msg="El campo mensaje es obligatorio"></textarea>
                                <div class="validation"></div>
                            </div> 
                        </div>
                    </div>
                </div>
                
                <button type="submit" class="bouton-contact">Send</button>
                
            </form> 
        </div>
    </div>
    @stop
    
    @section('footer')
        <script type="text/javascript" src="{{ URL::asset('js/jquery-3.1.1.min.js') }}"></script>
        <script type="text/javascript" src="{{ URL::asset('js/main.js') }}"></script>
        <script type="text/javascript" src="{{ URL::asset('js/sweetalert.min.js') }}"></script>
        <script>
            var picker = new Pikaday({
                field: document.getElementById('datepicker'),
                firstDay: 1,
                format: 'DD/MM/YYYY',
                disableDayFn: function(theDate) {
                    var reserves = "{{ isset($reserves) ? $reserves : [] }}";
                    return (theDate.getDay() != 6 && theDate.getDay() != 0 && theDate.getDay() != 5 && reserves.indexOf(theDate.toISOString().slice(0,10)));
                }
            });
            
            @if(session()->has('reserveDone'))
                swal({
                  title: "Reserva realizada",
                  text: "La reserva se ha realizado correctamente.",
                  type: "success",
                  confirmButtonText: "Aceptar"
                });
            @elseif(session()->has('reserveNotDone'))
                swal({
                  title: "Reserva no realizada",
                  text: "Sentimos comunicarte que la reserva no se ha podido realizar correctamente.",
                  type: "error",
                  confirmButtonText: "Aceptar"
                });
            @endif
        </script>
    @stop  
