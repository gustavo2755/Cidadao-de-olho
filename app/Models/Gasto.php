<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

    /**
     * This is a model for my Gasto table;
     * This table is used to record all the expenses of the deputies,
     */

class Gasto extends Model
{
    protected $fillable = [
    'deputado_ids',
    'ano',
    'mes',
    'valor_gasto',
    ];

}
