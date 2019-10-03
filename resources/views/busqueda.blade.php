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
                        <p >
                            <a href="{{route('folio',[$user->codigo_confirmacion])}}" target=”_blank” class="btn btn-success">
                                <i class="fa fa-print" aria-hidden="true"></i>
                                DESCARGA CÓDIGO 
                            </a> 
                        </p>
                        <div class="row mb50">
                            <div class="col-md-6 ml-auto mr-auto text-center">
                           
                                <a href=" {{ url('/') }} " class="btn btn-outline-success">
                                    <i class="fa fa-home" aria-hidden="true"></i>                           
                                    Regresar
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