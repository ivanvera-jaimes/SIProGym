<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Persona;
use App\plan;
use App\Pago;

use Illuminate\Support\Facades\Auth;

class personaController extends Controller
{
    public function __construct(){
        /* $this->middleware('auth')->except('index','show');
        $this->middleware('isAdmin')->except(['index','show']); */
    }
/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $personas = Persona::all();
        foreach($personas as $persona){
            $persona->plan;
        }

        return view("personas.ListadoMiembros",compact("personas"));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $planes=plan::all();
        return view("personas.UsuarioFormularioP",compact("planes"));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $resultado=$request["peso"]/pow($request["altura"],2);
        
        $persona = new Persona();
        $persona->id = $request["id"];
        $persona->foto=$request["foto"];
        $persona->tipo_documento= $request["tipo_documento"];
        $persona->nombre = $request["nombre"];
        $persona->apellido = $request["apellido"];
        $persona->edad = $request["edad"];
        $persona->email = $request["email"];
        $persona->altura = $request["altura"];
        $persona->peso = $request["peso"];
        $persona->imc = number_format($resultado, 2);
        $persona->plan_id = $request["plan_id"];

        $pago=new Pago();
        $planPago = Plan::find($persona->plan_id);
        $pago->costo = $planPago->valor;
        $pago->save();
        
        $persona->pago_id = $pago->id;
        $persona->save();
        return redirect()->route("personas.index");
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $persona = Persona::find($id);
        return $persona;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $persona = Persona::find($id);
        $planes = plan::all();
        return view("personas.EditarMiembro",compact(["persona","planes"]));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $resultado=$request["peso"]/pow($request["altura"],2);
        $persona = Persona::find($id);
        $persona->foto=$request["foto"];
        $persona->id =$id;
        $persona->tipo_documento = $request["tipo_documento"];
        $persona->nombre = $request["nombre"];
        $persona->apellido = $request["apellido"];
        $persona->edad = $request["edad"];
        $persona->email = $request["email"];
        $persona->altura = $request["altura"];
        $persona->peso = $request["peso"];
        $persona->imc = number_format($resultado, 2);
        $persona->plan_id = $request["plan_id"];
        $persona->save();
        return redirect()->route("personas.index");
    }
    /**
     * show the form to delete resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $persona = Persona::find($id);
        return view("personas.EliminarPersona",compact(["persona"]));
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $persona = Persona::find($id);
        $persona->delete();
        return redirect()->route("personas.index");
    }
}
