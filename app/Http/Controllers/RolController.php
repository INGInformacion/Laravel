<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Prueba as Prueba;

class RolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $info['ruta']               = route('rol.store');
        $info['metodo']             = 'POST';
        $info['NOMBRE']             = '';
        $info['APELLIDO']           = '';
        $info['F_NAC']              = '';
        $info['CEDULA']             = '';
        $info['DESCRIPCION']        = '';
        return view('rol')->with('info',$info);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $prueba = new Prueba;
        $prueba->NOMBRE                 = $request->input('NOMBRE');
        $prueba->APELLIDO               = $request->input('APELLIDO');
        $prueba->F_NAC                  = $request->input('F_NAC');
        $prueba->CEDULA                 = $request->input('CEDULA');
        $prueba->DESCRIPCION            = $request->input('DESCRIPCION');
        $prueba->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
         
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit(Request $request,$id)
    {
         $prueba = Prueba::find($id);
        $info['ruta']               = route('rol.update', $id);
        $info['metodo']              = 'PUT';
        $info['NOMBRE']             = $prueba->NOMBRE;
        $info['APELLIDO']           = $prueba->APELLIDO;
        $info['F_NAC']                = $prueba->F_NAC;
        $info['CEDULA']             = $prueba->CEDULA;
        $info['DESCRIPCION']        = $prueba->DESCRIPCION;
        return view('rol')->with('info', $info); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request,$id)
    {
        $prueba = Prueba::find($id);
        $prueba->NOMBRE                     = $request->input('NOMBRE');
        $prueba->APELLIDO                   = $request->input('APELLIDO');
        $prueba->F_NAC                       = $request->input('F_NAC');
        $prueba->CEDULA                     = $request->input('CEDULA');
        $prueba->DESCRIPCION               = $request->input('DESCRIPCION');
        return redirect()->back();
        
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
         Rol::destroy($id);
        return redirect()->back();
    }
}
