<?php
/**
 * Created by PhpStorm.
 * User: Joy_Admin
 * Date: 09/12/2016
 * Time: 23:23
 */

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\model\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use DB;
use Auth;
use Tymon\JWTAuth\Facades\JWTAuth;
use App\model\Role;
use App\model\Permission;

class UserController extends Controller
{


    /**
     * Pour recupérer tous les utilsateurs de la BD
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $users = User::all();

        foreach ($users as $user)
        {
            $user->DT_RowId = $user->id;
        }
        return response()->json($users);
    }

    public function seed()
    {
        $owner = new Role();
        $owner->name = "owner";
        $owner->display_name= "Project Owner";
        $owner->description= 'User is the owner of a given project (l\'utilisateur qui possède tout le projet)';
        $owner->save();

        $admin = new Role();
        $admin->name = "admin";
        $admin->display_name= "User Administrator";
        $admin->description= 'User is allowed to manage and edit other users';
        $admin->save();

        $driver = new Role();
        $driver->name = "driver";
        $driver->display_name= "A driver of the Society";
        $driver->description= 'This user only consult details and edit some tuffs';
        $driver->save();

        $user = User::where('username', '=', 'root')->first();
// role attach alias
        $user->attachRole($admin); // parameter can be an Role object, array, or id
        $user = User::where('username', '=', 'owner')->first();
        $user->attachRole($owner);
        $user = User::where('username', '=', 'driver')->first();
        $user->attachRole($driver);
        return response()->json("Seed effectué");
    }

    /**
     * Pour recupérer tous les utilsateurs de la BD
     * @return \Illuminate\Http\JsonResponse
     */
    public function test()
    {

        $user = JWTAuth::parseToken()->authenticate();
        $payload = Auth::getPayload();
        $res = array([
            'user' => $user,
            'payload' => $payload
        ]);
        return response()->json($res);
    }

    /**
     * pour enregistrer un nouvel utilisateur dans la base de données
     * @param Request $request
     */
    public function create(Request $request)
    {

        $user = new User();

       $user->name = $request->input('name');
      $user->surname = $request->input('surname');
       $user->username = $request->input('username');
       $user->password = Hash::make($request->input('password'));
        $user->save();//*/


    }


    /**
     * On renvoit l'individu dans la BD
     * correspondant à l'id spécifié
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function get($id)
    {
        $user = User::find($id);

        $user->DT_RowId = $user->id;
        $livraisons = $user->livraisons ;
        foreach ($livraisons as $livraison)
        {
            $commandes = $livraison->commandes;
            foreach ($commandes as $commande) {
                $commande->pointlivraison;
            }
            $livraison->camion;
        }
        return response()->json($user);
    }

    /**
     * Mettre à jour les informations sur un utilisateur de la BD
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request,$id)
    {
        $user = User::find($id);

        if(!empty($request->input('name'))) $user->name = $request->input('name');
        if(!empty($request->input('surname'))) $user->surname = $request->input('surname');
        if(!empty($request->input('username'))) $user->username = $request->input('username');
        if(!empty($request->input('password'))) $user->password = Hash::make($request->input('password'));

        $user->save();

        return response()->json($user);
    }

    public function delete($id)
    {
        $user = User::find($id);

        $user->delete();

        return response()->json('Success');

    }
}