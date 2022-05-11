<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

    /**
     * This is a model for my Redes Socias table.
     */
class RedesSociai extends Model
{
    use HasFactory;

    protected $fillable = [
        'facebook',
        'instagram',
        'twitter',
        'whats',
        'soundCloud',
        'Youtube',
        'Flickr',
        'LinkedIn',
    ];
}
