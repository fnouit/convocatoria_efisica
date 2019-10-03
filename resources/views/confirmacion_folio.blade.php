@extends('layouts.conf')

@section('content')



<div class="row">
    <div class="col-lg-12 text-center">
        <h3 class="text-uppercase text-secondary mb-3" >Registro exitoso</h3>
    </div>
</div>



        <div class="container p-3 pb60">
            <div class="row mb50">
                <div class="col-md-10 ml-auto mr-auto text-center">
                    <p class="lead">
                        Muchas gracias <strong>{{$usuario->nombre}}</strong>, nuestra meta es brindar herramientas a los docentes para mejorar su desempeño profesional y de esta manera lograr la mejora de la calidad en la educación.
                    </p>
                    <p class="p-2"></p>
                    <p class="lead">Tu código de confirmación es <h1>{{$usuario->codigo_confirmacion}}</h1></p>
                    <p class="lead">Te sugerimos tenerlo a la mano a la hora de realizar tu registro el día del evento.</p>
                </div>
            </div>            
            <div class="row mb50">
                <div class="col-md-6 ml-auto mr-auto text-center">
                    <a href="{{route('folio',[$usuario->codigo_confirmacion])}}" class="btn btn-outline-primary">
                        <i class="fa fa-print fa-3x" aria-hidden="true"></i>
                        Descarga tu FOLIO
                    </a>                    
                </div>
            </div>            


            <div class="row mb50">
                <div class="col-md-6 ml-auto mr-auto text-center">
                    <a href=" {{ url('/') }} " style="margin-top:35px;box-sizing:border-box;border-radius:3px;color:#fff;display:inline-block;text-decoration:none;background-color:#ed8407;border-top:10px solid #ed8407;border-right:18px solid #ed8407;border-bottom:10px solid #ed8407;border-left:18px solid #ed8407">
                        <i class="fa fa-home" aria-hidden="true"></i>                           
                        Terminar proceso de registro
                    </a>                                        
                </div>
            </div>            



            <hr class="mb80">
        </div>






@endsection


