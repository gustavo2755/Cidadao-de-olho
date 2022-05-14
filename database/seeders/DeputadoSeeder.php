<?php

namespace Database\Seeders;

use App\Models\Deputado;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DeputadoSeeder extends Seeder
{


      /**
     * This function is design to get the names and id of the deputys so i can use them later to get more information for the
     * other API.
     * @return void
     */
    
    public function run()
    {
        $url = 'http://dadosabertos.almg.gov.br/ws/deputados/lista_telefonica?formato=json';
        $dados = json_decode(file_get_contents($url));

        foreach ($dados->list as $nome) {
            $deputado = new Deputado();
            $deputado->name = $nome->nome;
            $deputado->deputado_ids = $nome->id;
            $deputado->save();
        }
    }
}
