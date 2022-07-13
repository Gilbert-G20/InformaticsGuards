<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    protected $table = "usuarios";
    
    protected $fillable = ['DNI','Nombre','Apellido','fecha_nacimiento','telefono','contraseña','role'];

    protected $hidden = ['id'];

    public function obtenerUsuario()
    {
        return Usuario::all();
    }
}
