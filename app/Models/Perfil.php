<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perfil extends Model
{
    use HasFactory;
    protected $table = "perfil";
    protected $primaryKey = 'nro_doc';
    protected $fillable = [
        'nro_doc',
        'nombres',
        'ap_paterno',
        'ap_materno',
        'direccion',
        'celular',
        'correo',
        'fecha_nacimiento'
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];
}
