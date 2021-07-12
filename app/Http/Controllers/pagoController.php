<?php

namespace App\Http\Controllers;
use App\Pago;
use App\Persona;
use App\Plan;

use Illuminate\Http\Request;

class pagoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pagos = pago::all();
        return view("pagos.formBuscarPago",compact("pagos"));
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
        $persona = Persona::find($request["id_pago"]);
        if($persona==null){
            return redirect()->route('personas.index');
        }else{
            $pago= Pago::find($persona->pago_id);
            $planPago = Plan::find($persona->plan_id);
            $pago->idPersona=$persona->id;
            $pago->costo = $planPago->valor;
            $pago->save();
            return redirect()->route('pagos.edit',['pago'=>$pago->id]);
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pago = Pago::find($id);
        $persona=Persona::find($pago->idPersona);
        return view("pagos.detallePago",compact(["pago", "persona"]));
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
        $pago = Pago::find($id);
        if($pago->estado == 1){
            return redirect()->route('personas.index');
        }else{
            $pago->costo = 0;
            $pago->estado = 1;//0=Falso 1=Verdadero
            $pago->save();
            return redirect()->route('pagos.index');
        }
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
