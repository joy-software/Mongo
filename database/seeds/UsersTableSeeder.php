<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\model\User;
/**
 * Created by PhpStorm.
 * User: Joy_Admin
 * Date: 08/12/2016
 * Time: 05:46
 */
class UsersTableSeeder extends Seeder
{
    public function run()
    {
       /* User::create([
            'name' => 'norman',
            'surname' => 'Vaughan',
            'username' => 'normanVau',
            'password' => Hash::make('pass1')
        ]);
        User::create([
            'name' => 'le bifton',
            'surname' => 'ou rien',
            'username' => 'helloworld',
            'password' => Hash::make('pass2')
        ]);
        User::create([
            'name' => 'fais',
            'surname' => 'comme',
            'username' => 'bidoung',
            'password' => Hash::make('pass3')
        ]);//*/
        User::create([
            'name' => 'root',
            'surname' => 'root',
            'username' => 'root',
            'password' => Hash::make('root')
        ]);
        User::create([
            'name' => 'admin',
            'surname' => 'admin',
            'username' => 'admin',
            'password' => Hash::make('admin')
        ]);
        User::create([
            'name' => 'driver',
            'surname' => 'driver',
            'username' => 'driver',
            'password' => Hash::make('driver')
        ]);
    }
}