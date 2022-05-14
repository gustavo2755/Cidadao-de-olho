<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

/**
     * This is a model for my Deputados table.
     * * This table is used to record all the deputy that we gonna use in our script
     */

class Deputado extends Model
{
    protected $fillable = [
        'deputado_ids',
        'name',
    ];

}
