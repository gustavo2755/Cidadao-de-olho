<?php

namespace Database\Seeders;

use App\Models\RedesSociai;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RedesSociaiSeeder extends Seeder
{
    

    /**
     * This function is design to get the social medias from the deputys and count.
     * i want to know exactly how many do i have of each to be easier to show the descending rank.
     * 
     * @return void
     */

    public function run()
    {
        $url = 'http://dadosabertos.almg.gov.br/ws/deputados/lista_telefonica?formato=json';
        $dados = json_decode(file_get_contents($url));

        $facebook = 0;
        $instagram = 0;
        $whats = 0;
        $soundCloud = 0;
        $youtube = 0;
        $flickr = 0;
        $linkedIn = 0;
        $twitter = 0;
        foreach ($dados->list as $nome) {
            foreach ($nome->redesSociais as $aux) {
                foreach ($aux->redeSocial as $rede) {
                    switch ($rede) {
                        case 'Facebook':
                            $facebook += 1;
                            break;
                        case 'Instagram':
                            $instagram += 1;
                            break;
                        case 'Twitter':
                            $twitter += 1;
                            break;
                        case 'WhatsApp':
                            $whats += 1;
                            break;
                        case 'SoundCloud':
                            $soundCloud += 1;
                            break;
                        case 'Youtube':
                            $youtube += 1;
                            break;
                        case 'Flickr':
                            $flickr += 1;
                            break;
                        case 'LinkedIn':
                            $linkedIn += 1;
                            break;
                    }
                }
            }
        }
        $redes = ["facebook", "Instagram", 'Twitter', 'WhatsApp', 'SoundCloud', 'Youtube', 'Flickr', 'LinkedIn'];
        for ($i = 0; $i <= 8; $i++) {
            $redes = new RedesSociai();

            $redes->redes = $redes[$i];
            $redes->quantities = $facebook;
            $redes->save();
        }
    }
}
