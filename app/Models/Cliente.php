<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{


    protected $table = 'clientes';


    protected $fillable = [
        'identificacion', 
        'nombre_completo',
        'apellido_completo',
        'email',
        'telefono'
        
    ];

}
