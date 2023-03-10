<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mascota extends Model
{
    protected $table = 'mascotas';


    protected $fillable = [	
    'identificador',	
    'nombre',
    'cliente_id',
    'tipo'  
    ];


    
}
