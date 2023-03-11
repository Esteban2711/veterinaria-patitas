<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Cliente;
use App\Models\Mascota;

class Cita extends Model
{
    protected $table = 'citas';


    protected $fillable = [
        'start',
        'title',
        'hora',
        'mascota_id',
        'cliente_id'
    ];




    public function clientes()
    {
        return $this->hasMany(Cliente::class, "cliente_id", "id");
    }

    public function mascotas()
    {
        return $this->hasMany(Mascota::class, "mascota_id", "id");
    }
}
