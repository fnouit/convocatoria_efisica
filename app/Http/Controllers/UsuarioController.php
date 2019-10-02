<?php

namespace App\Http\Controllers;

use App\Usuario;
use App\Region;
use App\Delegacion;
use Redirect;

use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $regiones = Region::all();
        $usuarios = Usuario::all();
        return view('admin.index',compact('regiones','usuarios'));
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $usuario = new Usuario();
        $usuario->nombre = $request->get('nombre');
        $usuario->apellido_p = $request->get('apellido_paterno');
        $usuario->apellido_m = $request->get('apellido_materno');
        $usuario->genero = $request->get('genero');
        $usuario->correo = $request->get('correo');
        $usuario->rfc = $request->get('rfc');
        $usuario->telefono = $request->get('telefono');
        $usuario->facebook = $request->get('facebook');
        $usuario->twitter = $request->get('twitter');
        $usuario->num_personal = $request->get('numero_personal');
        $usuario->delegacion = $request->get('delegaciones');
        $usuario->delegacion_op = $request->get('otra_delegacion');
        $usuario->funncion = $request->get('funcion');
        $usuario->licenciatura_EF = $request->get('escuela01');
        $usuario->licenciatura = $request->get('escuela02');
        $usuario->codigo_confirmacion = strtoupper(str_random(8));

        $reglas = [
            
            'nombre' => 'required',
            'apellido_paterno' => 'required',
            'correo' => 'required|unique:usuarios,correo',
            'rfc' => 'required',
            'telefono' => 'required',
            'numero_personal' => 'required|numeric|unique:usuarios,num_personal',
            'delegaciones' => 'required',  
        ];

        $mensaje =[
            'nombre.required' => 'Ingresa un nombre para el usuario',
            'apellido_paterno.required' => 'Es necesario el apellido para '. $usuario->nombre,
            'delegaciones.required' => 'Es necesario seleccionar una Delegación',
            'rfc.required' => 'Es necesario colocar tu RFC',
            'correo.required' => 'Tu correo electrónico es necesario',
            'correo.unique' => 'El correo que proporcionaste ya ha sido registrado',
            'telefono.required' => 'Es necesario ingreses un número telefónico',
            'numero_personal.required' => 'Requerimos tu número personal',
            'delegacion.required' => '¿Cúal es tú delegación?',
            'numero_personal.numeric' => 'Solo se aceptan números en el campo de Número de Personal',
            'numero_personal.unique' => 'El Número de personal ya se encuentra registrado'
        ];
        $this->validate($request, $reglas, $mensaje);       
        
        $usuario->save();
        return redirect()->route('confirmacion.registro', ['code' => $usuario->codigo_confirmacion]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function show($code)
    {
        $usuario = Usuario::where('codigo_confirmacion', '=', $code)->firstOrFail();
        return view('confirmacion_folio',compact('usuario'));
    }

    public function busqueda (Request $request) {

        $condicion = $request->get('tipo');
        $busqueda = $request->get('busqueda');


        if($condicion == "folio"){
            return Redirect::to('confirmacion/'.$busqueda.'/registro');
        } else {
            return Redirect::to('http://www.youtube.com');
        }

        






        if($condicion == "np"){
            return Redirect::to('http://www.youtube.com');
        }       

    }


}
