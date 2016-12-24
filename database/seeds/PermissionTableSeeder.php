<?php

/**
 * Created by PhpStorm.
 * User: Joy_Admin
 * Date: 23/12/2016
 * Time: 17:42
 */

use Illuminate\Database\Seeder;

class PermissionTableSeeder extends Seeder
{
    public function run()
    {
        /***
         * Les permissions pour les commandes
         */
        $createCommande = new Permission();
        $createCommande->name         = 'create-commande';
        $createCommande->display_name = 'Create Command'; // optional
// Allow a user to...
        $createCommande->description  = 'create new command'; // optional
        $createCommande->save();

        $editCommande = new Permission();
        $editCommande->name         = 'edit-commande';
        $editCommande->display_name = 'Edit Command'; // optional
// Allow a user to...
        $editCommande->description  = 'edit a command'; // optional
        $editCommande->save();

        $deleteCommande = new Permission();
        $deleteCommande->name         = 'delete-commande';
        $deleteCommande->display_name = 'Delete Command'; // optional
// Allow a user to...
        $deleteCommande->description  = 'delete a command'; // optional
        $deleteCommande->save();
        /**
         * Fin permissions Commandes
         */

        /**
         * Les permissions pour les camions
         */
        $createCamion = new Permission();
        $createCamion->name         = 'create-camion';
        $createCamion->display_name = 'Create Camion'; // optional
// Allow a user to...
        $createCamion->description  = 'create new camion'; // optional
        $createCamion->save();

        $editCamion = new Permission();
        $editCamion->name         = 'edit-camion';
        $editCamion->display_name = 'Edit Camion'; // optional
// Allow a user to...
        $editCamion->description  = 'edit a camion'; // optional
        $editCamion->save();

        $deleteCamion = new Permission();
        $deleteCamion->name         = 'delete-camion';
        $deleteCamion->display_name = 'Delete Camion'; // optional
// Allow a user to...
        $deleteCamion->description  = 'delete a camion'; // optional
        $deleteCamion->save();
        /**
         * Fin permissions Camions
         */

        /**
         * Les permissions pour les camions
         */
        $createUser = new Permission();
        $createUser->name         = 'create-user';
        $createUser->display_name = 'Create User'; // optional
// Allow a user to...
        $createUser->description  = 'create new user'; // optional
        $createUser->save();

        $editUser = new Permission();
        $editUser->name         = 'edit-user';
        $editUser->display_name = 'Edit User'; // optional
// Allow a user to...
        $editUser->description  = 'edit a user'; // optional
        $editUser->save();

        $deleteUser = new Permission();
        $deleteUser->name         = 'delete-user';
        $deleteUser->display_name = 'Delete User'; // optional
// Allow a user to...
        $deleteUser->description  = 'delete a user'; // optional
        $deleteUser->save();
        /**
         * Fin permissions Camions
         */

        $admin = User::where('username', '=', 'root')->first();
// role attach alias
        $admin->attachRole($admin); // parameter can be an Role object, array, or id
        $owner = User::where('username', '=', 'owner')->first();
        $owner->attachRole($owner);
        $driver = User::where('username', '=', 'driver')->first();
        $driver->attachRole($driver);

        $owner->attachPermissions(array($createUser, $editUser, $deleteUser,
            $createCamion, $editCamion, $deleteCamion,$createCommande, $editCommande, $deleteCommande,));

        $owner->attachPermissions(array($createUser,
            $createCamion, $editCamion, $deleteCamion,$createCommande, $editCommande, $deleteCommande,));
    }
}