<?php

/**
 * Created by PhpStorm.
 * User: Joy_Admin
 * Date: 23/12/2016
 * Time: 16:59
 */

use Illuminate\Database\Seeder;
use App\model\Role;

class RoleTableSeeder extends Seeder
{
   public function run()
   {
       $owner = Role::create([
           'name' => 'owner',
           'display_name' => 'Project Owner',
           'description' => 'User is the owner of a given project (l\'utilisateur qui possède tout le projet)'
       ]);
       $admin = Role::create([
           'name' => 'admin',
           'display_name' => 'User Administrator',
           'description' => 'User is allowed to manage and edit other users'
       ]);
       $driver = Role::create([
           'name' => 'driver',
           'display_name' => 'A driver of the Society',
           'description' => 'This user only consult details and edit some tuffs'
       ]);

       $user = User::where('username', '=', 'root')->first();
// role attach alias
       $user->attachRole($admin); // parameter can be an Role object, array, or id
       $user = User::where('username', '=', 'owner')->first();
       $user->attachRole($owner);
       $user = User::where('username', '=', 'driver')->first();
       $user->attachRole($driver);
   }
}