<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\ActualizarPerfilRequest;
use App\Http\Requests\GuardarPerfilRequest;
use App\Http\Resources\PerfilResource;
use App\Models\Perfil;
use Illuminate\Http\Request;

class PerfilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return PerfilResource::collection(Perfil::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GuardarPerfilRequest $request)
    {
       
        // return response()->json([
        //     'response' => true,
        //     'mensaje' => "Perfil Guardado Correctamente",
        // ],200);
            
        return (new PerfilResource(Perfil::create($request->all())))
                ->additional(['msg'=>'Paciente registrado correctamente']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Perfil $perfil)
    {   
        // return response()->json([
        //     'res' => true,
        //     'perfil' => $perfil
        // ],200);
        
        return new PerfilResource($perfil);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ActualizarPerfilRequest $request, Perfil $perfil)
    {   
        
        // $perfil->update($request->all());
        // return response()->json([
        //     'res'=> true,
        //     'mensaje'=>'Perfil Actualizado'
        // ],200);
        $perfil->update($request->all());
        return (new PerfilResource($perfil))
                ->additional(['msg' => 'Paciente actualizado correctamente'])
                ->response()
                ->setStatusCode(202);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Perfil $perfil)
    {
        $perfil->delete();
        // return response()->json([
        //     'res'=> true,
        //     'mensaje'=>'Perfil Eliminado correctamente'
        // ],200);
        return (new PerfilResource($perfil))
            ->additional(['msg' => 'Paciente eliminado correctamente']);
    }
}
