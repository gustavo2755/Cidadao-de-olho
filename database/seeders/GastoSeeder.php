<?php

namespace Database\Seeders;

use App\Models\Deputado;
use App\Models\Gasto;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GastoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $deputados = Deputado::all();
        foreach($deputados as $deputado){
            for($i = 1;$i <= 12; $i ++){
                if($i == 3|| $i == 6|| $i == 9|| $i == 12){
                    sleep(2);
                }
                $url = "http://dadosabertos.almg.gov.br/ws/prestacao_contas/verbas_indenizatorias/deputados/" . 
                $deputado->deputado_ids .
                "/2019/" .
                $i .
                "?formato=json";
                echo  $url . "\n";
                $dados = json_decode(file_get_contents($url));
                $total = 0.0;
                foreach($dados->list as $item){
                    if($item !=''){
                    $total += $item->valor;
                    }
                    
                }
                $gasto = new Gasto();
                $gasto->deputado_ids = $deputado->deputado_ids;
                $gasto->valor_gasto = $total;
                $gasto->ano = 2019;
                $gasto->mes = $i;
                $gasto->save();
                
            }
          
        }
    }
}
