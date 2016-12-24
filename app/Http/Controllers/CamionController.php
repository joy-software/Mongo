<?php
/**
 * Created by PhpStorm.
 * User: Joy_Admin
 * Date: 14/12/2016
 * Time: 06:17
 */

namespace App\Http\Controllers;


use App\model\Camion;
use Illuminate\Http\Request;

class CamionController
{
    /**
     * Pour recupérer tous les utilsateurs de la BD
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $camions = Camion::all();
        return response()->json($camions);
    }



    /**
     * pour enregistrer un nouvel utilisateur dans la base de données
     * @param Request $request
     */
    public function create(Request $request)
    {

        $camion = new Camion();

        $camion->immatriculation = $request->input('immatriculation');
        $camion->code = $request->input('code');

        $camion->save();//*/


        return response()->json($camion);

    }


    /**
     * On renvoit l'individu dans la BD
     * correspondant à l'id spécifié
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function get($id)
    {
        $camion = Camion::find($id);


        return response()->json($camion);
    }

    /**
     * Mettre à jour les informations sur un utilisateur de la BD
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request,$id)
    {
        $camion = Camion::find($id);

        if(!empty($request->input('immatriculation'))) $camion->name = $request->input('immatriculation');
        if(!empty($request->input('code'))) $camion->description = $request->input('code');

        $camion->save();

        return response()->json($camion);

    }

    public function delete($id)
    {
        $camion = Camion::find($id);

        $camion->delete();

        return response()->json('Success');

    }
}