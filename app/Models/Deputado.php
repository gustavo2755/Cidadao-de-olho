<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Deputado extends Model
{
    use HasFactory;

    /**
     * This is a model for my Deputados table.
     */
     
    protected $fillable = [
        'deputado_ids',
        'name',
    ];


}
