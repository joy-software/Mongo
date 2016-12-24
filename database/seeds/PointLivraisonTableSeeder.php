<?php

/**
 * Created by PhpStorm.
 * User: Joy_Admin
 * Date: 14/12/2016
 * Time: 03:43
 */

use Illuminate\Database\Seeder;
use App\model\PointLivraison;

class PointLivraisonTableSeeder extends Seeder
{
    public function run()
    {
        PointLivraison::create([
            'name' => 'maetur nkomo',
            'localisation' => 'yaounde après l\'entrée maetur',
            'longitude' => 3.843363,
            'lattitude' => 11.562847,
            'description' => 'livrer 1000 bouteilles',
            "ordre"=> 1
        ]);
        PointLivraison::create([
            'name' => 'caroussel',
            'localisation' => 'situé près d\'ekounou',
            'longitude' => 3.849799,
            'lattitude' => 11.537947,
            'description' => 'livrer 2000 bouteilles',
            "ordre"=> 2
        ]);
        PointLivraison::create([
            'name' => 'Bois Saint Anestasie',
            'localisation' => 'a coté du collège la retraite',
            'longitude' => 3.871974,
            'lattitude' => 11.514343,
            'description' => 'livrer 1500 bouteilles',
            "ordre"=> 3
        ]);
        PointLivraison::create([
            'name' => 'Ecole Nationale Supérieure Polytechnique',
            'localisation' => 'Sur la route Melen - Emia ',
            'longitude' => 3.862580,
            'lattitude' => 11.500155,
            'description' => 'livrer 45 bouteilles au 5GI',
            "ordre"=> 4
        ]);
    }
}