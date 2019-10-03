@extends('layouts.main')

@section('content')

<section id="registro">
    <div class="container">

        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading text-uppercase">FORMULARIO DE REGISTRO</h2>
                <h3 class="section-subheading text-muted">Tercera Jornada Académica</h3>
            </div>
        </div>


        <div class="row">
            <div class="col-lg-12 text-center">
                @if ($errors->any())
                <div class="alert alert-danger row div-error">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12 text-center">
                <form role="form" data-ember-action-501="501" action="{{route('nuevo.registro')}}" method="POST">
                    {{ csrf_field() }}
                    <div class="messages"></div>
                    <div class="controls">
                        <h5 class="text-uppercase text-secondary mb-3">Datos Personales</h5>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="nombre"><b style="color: red;">*</b> Nombre</label>
                                    <input id="nombre" type="text" name="nombre" class="form-control"
                                        placeholder="Ingresa tú nombre *" value="{{old('nombre')}}" required="required">
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label for="apellido_paterno"><b style="color: red;">*</b> Apellido Paterno </label>
                                    <input id="apellido_paterno" type="text" name="apellido_paterno"
                                        class="form-control" placeholder="Primer apellido *" required="required"
                                        value="{{old('apellido_paterno')}}">
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label for="apellido_materno">Apellido Materno</label>
                                    <input id="apellido_materno" type="text" name="apellido_materno"
                                        class="form-control" placeholder="Segundo apellido"
                                        value="{{old('apellido_materno')}}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-5">
                                <div class="form-group">
                                    <label for="correo"><b style="color: red;">*</b> Correo electrónico </label>
                                    <input id="correo" type="email" name="correo" class="form-control"
                                        placeholder="¿Cúal es tu correo?" required="required" value="{{old('correo')}}">
                                </div>
                            </div>
                            <div class="col-sm-5">
                                <div class="form-group">
                                    <label for="rfc"><b style="color: red;">*</b> RFC</label>
                                    <input id="rfc" type="text" name="rfc" class="form-control"
                                        placeholder="Ingresa tú RFC *" required="required" value="{{old('rfc')}}">
                                </div>
                            </div>


                            <div class="col-sm-2">
                                <div class="form-group">
                                    <label for="select">Genero</label>
                                    <select class="form-control" name="genero">
                                        <option disabled selected>Selecciona una opción</option>
                                        <option value="mujer">Mujer </option>
                                        <option value="hombre">Hombre</option>
                                        <option value="LGBT">LGBT</option>
                                        <option value="sin_especificar">Sin especificar</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">

                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="telefono"><b style="color: red;">*</b> Teléfono</label>
                                <input id="telefono" type="tel" name="telefono" class="form-control"
                                    placeholder="Proporciónanos tu número" value="{{old('telefono')}}" telefono>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>



                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="facebook">Facebook</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">/</div>
                                    </div>
                                    <input type="text" placeholder="¿Tienes facebook?" id="facebook" name="facebook"
                                        class="form-control" value="{{old('facebook')}}">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="twitter">Twitter</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">@</div>
                                    </div>
                                    <input type="text" placeholder="¿Tienes twitter?" id="twitter" name="twitter"
                                        class="form-control" value="{{old('twitter')}}">
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="clearfix"></div>
                    <p class="p-3"></p>
                    <h5 class="text-uppercase text-secondary mb-3">Datos Laborales</h5>
                    <div class="row">
                        <div class="col-xs-12 col-sm-4">
                            <div class="form-group">
                                <label for="numero_personal"><b style="color: red;">*</b> Número de Personal </label>
                                <input type="tel" placeholder="Tú número *" id="numero_personal" name="numero_personal"
                                    class="form-control" equired="required" value="{{old('numero_personal')}}">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4">
                            <div class="form-group">
                                <label for="region">Región</label>
                                <select class="custom-select form-control" name="region" id="region">
                                    <option disabled selected>Selecciona Región</option>
                                    @foreach ($regiones as $key => $region)
                                    <option value="{{$region->id}}">{{$key+1}} - {{$region->nombre}}&nbsp
                                        &nbsp{{$region->sede}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4">
                            <div class="form-group">
                                <label for="delegaciones">Delegación</label>
                                <select class="custom-select form-control" name="delegaciones" id="delegaciones">

                                </select>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-xs-12 col-sm-12">
                            <div class="form-group">
                                <small>Si no encuentras tu delegación ingrésala manualmente</small>
                                <input type="text" placeholder="Ejemplo D-I-0" id="otra_delegacion"
                                    name="otra_delegacion" class="form-control" value="{{old('otra_delegacion')}}">
                            </div>
                        </div>
                    </div>

                    <div class="clearfix"></div>
                    <p class="p-3"></p>
                    <h5 class="text-uppercase text-secondary mb-3">Función que Desempeñas</h5>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12">
                            <div class="form-group">
                                <select class="form-control" name="funcion">
                                    <option disabled selected>Selecciona Función</option>
                                    <option value="Docente a Clase Directa">Docente a Clase Directa</option>
                                    <option value="ATP">ATP</option>
                                    <option value="Supervisor de Educación Física">Supervisor de Educación Física
                                    </option>
                                    <option value="Auxiliar de Supervisión">Auxiliar de Supervisión</option>
                                    <option value="Técnico Deportivo">Técnico Deportivo</option>
                                    <option value="Docente de otro Nivel Educativo">Docente de otro Nivel Educativo
                                    </option>
                                </select>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-xs-12 col-sm-6">
                            <div class="form-group">
                                <label for="escuela01"> Estudiante de Licenciatura de E.F. </label>
                                <input type="tel" placeholder="¿Cuál es tú Escuela Formadora?" id="escuela01"
                                    name="escuela01" class="form-control" value="{{old('escuela01')}}">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="form-group">
                                <label for="escuela02"> Estudiante de Licenciatura </label>
                                <input type="text" placeholder="¿Cuál es tú Escuela Formadora?" id="escuela02"
                                    name="escuela02" class="form-control" value="{{old('escuela02')}}">
                            </div>
                        </div>
                    </div>



                    <div class="clearfix"></div>
                    <p class="p-3"></p>

                    <div class="row">
                        <div class="col-md-12">
                            <center><input type="submit" class="btn btn-warning btn-send" value="Regístrate"></center>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
</div>


<section id="busqueda">
    <div class="container">

        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading text-uppercase">Buscar </h2>
                <h3 class="section-subheading text-muted">Puedes verificar el registro ingresando tu número de folio o tu número de personal</h3>
            </div>
        </div>


        <div class="row">
            <div class="col-lg-12 text-center">
                <form role="form" data-ember-action-501="501" action="{{route('buscar.registro')}}" method="POST">
                    {{ csrf_field() }}
                    <div class="messages"></div>
                    <div class="controls">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="tipo">¿De qué forma deseas realizar tu búsqueda?</label>
                                    <select class="form-control" id="tipo" name="tipo">
                                        <option disabled selected>Selecciona alguna</option>
                                        <option value="folio" selected="selected">Por folio</option>
                                        <option value="np">Por número de personal</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <input id="buscar" type="text" name="busqueda" class="form-control" placeholder="Ingresa tú busqueda" required>
                                </div>
                                <div class="form-group">
                                    <input type="submit" class="btn btn-success btn-send" value="Consultar">
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <img src="{{asset('img/img2.jpg')}}" alt="">
                            </div>

                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <p class="p-3"></p>
                </form>

            </div>
        </div>

    </div>
</div>





        @endsection



        @section('script')

        <script type="text/javascript">
        $(document).ready(function() {
            $("#region").change(function() {
                var region_id = $(this).val();

                $.get('/region/' + region_id + '/delegaciones', function(data) {
                    $('#delegaciones').empty();
                    $('#delegaciones').append(
                        '<option disabled selected>Selecciona Delegación</option>');
                    for (var i = 0; i < data.length; ++i)
                        $('#delegaciones').append('<option value="' + data[i].delegacion +
                            '">' + data[i].delegacion + '</option>');
                    return;
                });
            });
        });
        </script>

        @endsection