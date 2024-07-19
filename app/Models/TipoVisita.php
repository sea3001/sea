<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoVisita extends Model
{
    use HasFactory;
    protected $table = "tipo_visitas";
    protected $primaryKey = "id";
    protected $fillable = [
        'sigla',
        'detalle'
    ];
}