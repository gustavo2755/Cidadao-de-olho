<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gasto extends Model
{
    protected $fillable = [
    'deputado_ids',
    'ano',
    'mes',
    'valor_gasto',
    ];
}
