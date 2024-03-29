<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetalleVenta extends Model
{
    use HasFactory;
    protected $table =  "detalle_ventas";
    protected $fillable = ['precio','cantidad','nombre','barcode','id_venta','id_cliente'];
}
