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

        ->orderBy('quantities', 'asc')
        ->orderBy('redes', 'asc')
        ->limit(8)
        ->get();

        dd($mostrarrede);

    }
}
