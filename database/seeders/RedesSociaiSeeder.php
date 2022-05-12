<?php

namespace Database\Seeders;

use App\Models\RedesSociai;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RedesSociaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    /**
     * This function is design to get the social medias from the deputys and count.
     * i want to know exactly how many do i have of each to be easier to show the descending rank.
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
        for ($i = 0; $i <= 8; $i++) {
            $redes = new RedesSociai();
            switch ($i) {
                case '0':
                    $redes->redes = 'Facebook';
                    $redes->quantities = $facebook;
                    $redes->save();
                    break;
                case '1':
                    $redes->redes = 'Instagram';
                    $redes->quantities = $instagram;
                    $redes->save();
                    break;
                case '2':
                    $redes->redes = 'Twitter';
                    $redes->quantities = $twitter;
                    $redes->save();
                    break;
                case '3':
                    $redes->redes = 'WhatsApp';
                    $redes->quantities = $whats;
                    $redes->save();
                    break;
                case '4':
                    $redes->redes = 'SoundCloud';
                    $redes->quantities = $soundCloud;
                    $redes->save();
                    break;
                case '5':
                    $redes->redes = 'Youtube';
                    $redes->quantities = $youtube;
                    $redes->save();
                    break;
                case '6':
                    $redes->redes = 'Flickr';
                    $redes->quantities = $flickr;
                    $redes->save();
                    break;
                case '7':
                    $redes->redes = 'LinkedIn';
                    $redes->quantities = $linkedIn;
                    $redes->save();
                    break;
            }
        }
    }
}
