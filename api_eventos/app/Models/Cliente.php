<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cliente extends Model
{
    use HasFactory,SoftDeletes;

    protected $table = 'Clientes';
    protected $primaryKey = 'rut_cliente';
    public $incrementing = false;
    protected $keyType = 'string';
    public $timestamps = false;

}
