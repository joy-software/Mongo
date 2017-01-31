<?php
/**
 * Created by PhpStorm.
 * User: Joy_Admin
 * Date: 14/12/2016
 * Time: 05:31
 */

namespace App\Http\Controllers;


use App\model\Commande;
use Illuminate\Http\Request;

class CommandeController extends Controller
{
    /**
     * Pour recupérer tous les utilsateurs de la BD
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $commandes = Commande::all();
        return response()->json($commandes);
    }



    /**
     * pour enregistrer un nouvel utilisateur dans la base de données
     * @param Request $request
     */
    public function create(Request $request)
    {

        $commande = new Commande();

        $commande->pointLivraison_id = $request->input('pointLivraison_id');
        $commande->livraison_id = $request->input('livraison_id');
        $commande->description = $request->input('description');
        $commande->priority = $request->input('priority');
        $commande->status = $request->input('status');
        if(!empty($request->input('end'))) $commande->end = Carbon::createFromFormat('Y-m-d H:i:s',$request->input('end'));
        $commande->save();//*/


        return response()->json($commande);

    }


    /**
     * On renvoit l'individu dans la BD
     * correspondant à l'id spécifié
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function get($id)
    {
        $commande = Commande::find($id);

        $commande->pointlivraison;

        return response()->json($commande);
    }

    /**
     * Mettre à jour les informations sur un utilisateur de la BD
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request,$id)
    {
        $commande = Commande::find($id);

        if(!empty($request->input('pointLivraison_id'))) $commande->name = $request->input('pointLivraison_id');
        if(!empty($request->input('livraison_id'))) $commande->name = $request->input('livraison_id');
        if(!empty($request->input('description'))) $commande->description = $request->input('description');
        if(!empty($request->input('priority'))) $commande->priority = $request->input('priority');
        if(!empty($request->input('status'))) $commande->status = $request->input('status');
        if(!empty($request->input('end'))) Carbon::createFromFormat('Y-m-d H:i:s', $commande->end = $request->input('end'));

        $commande->save();

        return response()->json($commande);

    }

    public function delete($id)
    {
        $commande = Commande::find($id);

        $commande->delete();

        return response()->json('Success');

    }
}