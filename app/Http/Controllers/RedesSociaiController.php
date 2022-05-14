<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\DB;


    /**
     * This is a controller for my Redes Socias table.
     * i will use here to change the order of the table to a rank
     * @return Array $mostrarrede
     */

class RedesSociaiController extends Controller
{
    function organizaredes()
    {
        $mostrarrede = DB::Table('redes_sociais')

        ->orderBy('quantities', 'desc')
        ->orderBy('redes', 'desc')
        ->select('redes','quantities')
        ->get();
        
        return $mostrarrede;
    }

}
