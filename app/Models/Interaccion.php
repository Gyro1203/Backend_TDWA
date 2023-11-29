<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Interaccion extends Model
{
    use HasFactory;
    protected $table = 'interaccion_';
    protected $fillable = ['id_perro_interesado', 'id_perro_candidato', 'rechazado', 'aprobado'];
}
