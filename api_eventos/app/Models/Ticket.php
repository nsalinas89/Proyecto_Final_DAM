<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Ticket extends Model
{
    use HasFactory,SoftDeletes;

    protected $table = 'Tickets';
    protected $primaryKey = 'cod_ticket';
    public $incrementing = true;
    protected $keyType = 'integer';
    public $timestamps = false;
}
