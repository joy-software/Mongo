<?php
/**
 * Created by PhpStorm.
 * User: Joy_Admin
 * Date: 14/12/2016
 * Time: 08:30
 */

namespace App\Http\Controllers;

use App\model\Livraison;
use Illuminate\Http\Request;

class LivraisonController extends Controller
{
    /**
     * Pour recupérer tous les utilsateurs de la BD
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $livraisons = Livraison::all();

        foreach ($livraisons as $livraison) {
            $commandes = $livraison->commandes;
            foreach ($commandes as $commande) {
                $commande->pointlivraison;
            }
            $livraison->camion;
        }

        return response()->json($livraisons);
    }



    /**
     * pour enregistrer un nouvel utilisateur dans la base de données
     * @param Request $request
     */
    public function create(Request $request)
    {

        $livraison = new Livraison();
        $livraison->user_id = $request->input('user_id');

        $livraison->save();//*/


        return response()->json($livraison);

    }


    /**
     * On renvoit l'individu dans la BD
     * correspondant à l'id spécifié
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function get($id)
    {
        $livraison = Livraison::find($id);

        $commandes = $livraison->commandes;
        foreach ($commandes as $commande) {
            $commande->pointlivraison;
        }
        $livraison->camion;
        return response()->json($livraison);
    }

    /**
     * Mettre à jour les informations sur un utilisateur de la BD
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request,$id)
    {
        $livraison = Livraison::find($id);
        if(!empty($request->input('user_id'))) $livraison->user_id = $request->input('user_id');
        $livraison->save();

        return response()->json($livraison);

    }

    public function delete($id)
    {
        $livraison = Livraison::find($id);

        $livraison->delete();

        return response()->json('Success');

    }
}