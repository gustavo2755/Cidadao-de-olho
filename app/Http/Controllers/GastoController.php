<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;



use App\Models\Gasto;

    
class GastoController extends Controller
{

    /**
     *This is a controller for my gastos table
     * i will use here to make a rank by month of the 5 deputys who spent more money
     *
     * @return Array $gastos
     */
    function organizadeput()
    {
        for ($i = 1;$i <= 12;$i++ ){
            $result = Gasto::join('deputados', 'gastos.deputado_ids', '=', 'deputados.deputado_ids')
            ->select('deputados.name','gastos.valor_gasto','gastos.mes','gastos.ano')
            ->where('gastos.mes', '=', $i)
            ->orderBy('gastos.valor_gasto', 'desc')
            ->limit(5)
            ->get();
            
            $gastos[] = $result;
        }
    
        return  $gastos ;
        
    }
}
