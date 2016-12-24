<?php
/**
 * Created by PhpStorm.
 * User: Joy_Admin
 * Date: 14/12/2016
 * Time: 04:11
 */

namespace App\Http\Controllers;


use App\model\PointLivraison;
use Illuminate\Http\Request;

class PointLivraisonController extends  Controller
{
    /**
     * Pour recupérer tous les utilsateurs de la BD
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $pointLivraisons = PointLivraison::all();

        foreach ($pointLivraisons as $livraison) {
            $livraison->commandes;
            $livraison->DT_RowId = $livraison->id;
        }

        return response()->json($pointLivraisons);
    }



    /**
     * pour enregistrer un nouvel utilisateur dans la base de données
     * @param Request $request
     */
    public function create(Request $request)
    {

        $pointLivraison = new PointLivraison();

        $pointLivraison->name = $request->input('name');
        $pointLivraison->description = $request->input('description');
        $pointLivraison->localisation = $request->input('localisation');
        $pointLivraison->longitude = $request->input('longitude');
        $pointLivraison->lattitude = $request->input('lattitude');
        $pointLivraison->save();//*/


        return response()->json($pointLivraison);

    }


    /**
     * On renvoit l'individu dans la BD
     * correspondant à l'id spécifié
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function get($id)
    {
        $pointLivraison = PointLivraison::find($id);
        $pointLivraison->commandes;
        $pointlivraison->DT_RowId = $pointlivraison->id;
        return response()->json($pointLivraison);
    }

    /**
     * Mettre à jour les informations sur un utilisateur de la BD
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request,$id)
    {
        $pointLivraison = PointLivraison::find($id);

        if(!empty($request->input('name'))) $pointLivraison->name = $request->input('name');
        if(!empty($request->input('description'))) $pointLivraison->description = $request->input('description');
        if(!empty($request->input('localisation'))) $pointLivraison->localisation = $request->input('localisation');
        if(!empty($request->input('longitude'))) $pointLivraison->longitude = $request->input('longitude');
        if(!empty($request->input('lattitude'))) $pointLivraison->lattitude = $request->input('lattitude');
        if(!empty($request->input('ordre'))) $pointLivraison->ordre = $request->input('ordre');
        $pointLivraison->save();//*/



        return response()->json($pointLivraison);

    }

    public function delete($id)
    {
        $pointLivraison = PointLivraison::find($id);

        $pointLivraison->delete();

        return response()->json('Success');

    }
}