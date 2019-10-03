@extends('layouts.conf')

@section('content')

    <div class="container pt40 pb100 text-uppercase">
        <div class="row text-center">
            <div class="col-md-6 mr-auto ml-auto">    
                @if(count($usuario)>0)
                    @foreach($usuario as $user)   
                        <h3 class="text-uppercase text-secondary mb-3" >Usuario Registrado</h3> 
                        <h3 class="font300 mb20 h2">{{$user->nombre}}  <span class="text-primary">{{$user->apellido_p}}</span></h3>
                        <p class="p-2"></p>
                        <p class="lead">Tu código de confirmación es <h1>{{$user->codigo_confirmacion}}</h1></p>
                        <p class="lead">Te sugerimos tenerlo a la mano a la hora de realizar tu registro el día del evento.</p> 

                        <div class="row mb50">
                            <div class="col-md-6 ml-auto mr-auto text-center">
                                <a href=" {{ url('/') }} " style="margin-top:35px;box-sizing:border-box;border-radius:3px;color:#fff;display:inline-block;text-decoration:none;background-color:#ed8407;border-top:10px solid #ed8407;border-right:18px solid #ed8407;border-bottom:10px solid #ed8407;border-left:18px solid #ed8407">
                                    <i class="fa fa-home" aria-hidden="true"></i>                           
                                    Terminar proceso de registro
                                </a>                                        
                            </div>
                        </div>   
                        
                    @endforeach 
                @else
                    <h3 class="font300 mb20 h2">SIN  <span class="text-primary">REGISTRO</span></h3>
                    <p>No contamos con ningún registro solicitado con el FOLIO que nos proporcionaste.</p>
                @endif
            </div>
        </div>
    </div>
@endsection