<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rutas extends Model
{
    use HasFactory;
    protected $fillable=['idRuta','idDespacho','tiempoEstimado','valorTiquete','Imagen'];
    protected $primaryKey='idRuta';
    
}
