<?php

/**
 * Created by PhpStorm.
 * User: Joy_Admin
 * Date: 14/12/2016
 * Time: 06:09
 */

use Illuminate\Database\Seeder;
use App\model\Camion;

class CamionTableSeeder  extends  Seeder
{

    public function run()
    {
        Camion::create([
            'immatriculation' => 'CE 154 VF',
            'livraison_id' => "5859d83e01e31c10ec003e79"
        ]);
        Camion::create([
            'immatriculation' => 'LT 155 VS',
            'livraison_id' => "5859d83e01e31c10ec003e79"
        ]);
        Camion::create([
            'immatriculation' => 'SW 144 VE',
        ]);
        Camion::create([
            'immatriculation' => 'AD 154 WC',
        ]);
        Camion::create([
            'immatriculation' => 'ND 154 VC',
        ]);
        Camion::create([
            'immatriculation' => 'ES 154 AF',
        ]);

    }
}