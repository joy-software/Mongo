<?php

/**
 * Created by PhpStorm.
 * User: Joy_Admin
 * Date: 14/12/2016
 * Time: 07:19
 */

use Illuminate\Database\Seeder;
use App\model\Livraison;

class LivraisonTableSeeder extends Seeder
{
    public function run()
    {
        Livraison::create();
        Livraison::create();
    }

}