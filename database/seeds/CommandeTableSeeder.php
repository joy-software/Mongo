<?php

/**
 * Created by PhpStorm.
 * User: Joy_Admin
 * Date: 14/12/2016
 * Time: 05:04
 */

use Illuminate\Database\Seeder;
use App\model\Commande;

class CommandeTableSeeder extends Seeder
{
    public function run()
    {
        Commande::create([
            'pointLivraison_id' => '585a5d0601e31c1504000995',
            'priority' => 'elevee',
            'description' => 'livrer 45 bouteilles',
            'status' => 'effectue',
            'end' => '1995-12-14',
            'livraison_id' => "5859d83e01e31c10ec003e79"
        ]);
        Commande::create([
            'pointLivraison_id' => '585a5d0601e31c1504000995',
            'priority' => 'moyenne',
            'description' => 'livrer 50 bouteilles',
            'status' => 'non effectue',
            'livraison_id' => "5859d83e01e31c10ec003e79"
        ]);
        Commande::create([
            'pointLivraison_id' => '585a5d0601e31c1504000995',
            'priority' => 'faible',
            'description' => 'livrer 20 bouteilles',
            'status' => 'non effectue',
            'livraison_id' => "5859d83e01e31c10ec003e79"
        ]);
        Commande::create([
            'pointLivraison_id' => '585a5d0601e31c1504000995',
            'priority' => 'elevee',
            'description' => 'livrer 60 bouteilles',
            'status' => 'non effectue',
            'livraison_id' => "5859d83e01e31c10ec003e79"
        ]);//*/
    }
}