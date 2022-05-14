<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

    /**
     * This is a model for my Redes Socias table.
     * This table is used to record the social medias and how many people uses each one of that
     */
class RedesSociai extends Model
{
    use HasFactory;

    protected $fillable = [
        'redes',
        'quantities',
    ];
}
