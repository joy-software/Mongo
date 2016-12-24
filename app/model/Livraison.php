<?php
/**
 * Created by PhpStorm.
 * User: Joy_Admin
 * Date: 14/12/2016
 * Time: 07:19
 */

namespace App\model;

use Jenssegers\Mongodb\Eloquent\Model;

class Livraison  extends  Model
{
    protected $collection = 'livraison';
    protected $primaryKey = '_id';

    public function commandes()
    {
        return $this->hasMany('App\model\Commande');

    }

    public function camion()
    {
        return $this->hasMany('App\model\Camion');
    }
}