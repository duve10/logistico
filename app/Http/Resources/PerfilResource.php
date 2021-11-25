<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Str;

class PerfilResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            
            'nro_doc' => $this->nro_doc,
            'nombres' => Str::of($this->nombres)->upper(),
            'ap_paterno' => Str::of($this->ap_paterno)->upper(),
            'ap_materno' => Str::of($this->ap_materno)->upper(),
            'direccion' => $this->direccion,
            'celular' => $this->celular,
            'correo' => $this->correo,
            'fecha_nacimiento' => $this->fecha_nacimiento,
            'fecha_creado' => $this->created_at,
            'fecha_modificado' => $this->updated_at
        ];
    }

    public function with($request) 
    {
        return [
            'res' => true
        ];
    }
}
