<?php
/**
 * Created by PhpStorm.
 * User: Joy_Admin
 * Date: 14/12/2016
 * Time: 03:40
 */

namespace App\model;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class PointLivraison extends Eloquent
{
    protected $collection = 'pointLivraison';
    protected $primaryKey = '_id';


    public function commandes()
    {
        return $this->hasMany('App\model\Commande','pointLivraison_id');

    }
}