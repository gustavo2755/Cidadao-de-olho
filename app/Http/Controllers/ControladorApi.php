<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Client\Response;
use App\Models\Deputado;
use App\Models\RedesSociai;
use Illuminate\Support\Facades\DB;

class ControladorApi extends Controller
{



    function organizaredes()
    {
        $mostrarrede = DB::Table('redes_sociais')

        ->orderBy('quantities', 'desc')
        ->orderBy('redes', 'desc')
        ->limit(8)
        ->get();
        
        return $mostrarrede;
    }

    
    function organizadeput()
    {
        for ($i = 1;$i <= 12;$i++ ){
           
            $gastos = DB::Table('gastos')->where('mes',$i)
            ->orderBy('valor_gasto', 'desc')
            ->limit(5)
            ->get();
            $gastosaux[] = $gastos;

        }
        return $gastosaux;
    }
}
