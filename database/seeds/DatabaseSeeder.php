<?php

use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        //$this->call('PointLivraisonTableSeeder');
        //$this->call('LivraisonTableSeeder');
        //$this->call('CommandeTableSeeder');
        //$this->call('UsersTableSeeder');
        //$this->call('CamionTableSeeder');
        //$this->call('RoleTableSeeder');
        $this->call('PermissionTableSeeder');
    }
}
