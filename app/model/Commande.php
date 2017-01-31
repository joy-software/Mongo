<?php
/**
 * Created by PhpStorm.
 * User: Joy_Admin
 * Date: 14/12/2016
 * Time: 05:03
 */

namespace App\model;


use Jenssegers\Mongodb\Eloquent\Model;

class Commande extends Model
{
    protected $collection = 'commande';
    protected $primaryKey = '_id';
  //  protected $dates = ['end'];

    public function pointlivraison()
    {
        return $this->belongsTo('App\model\PointLivraison', 'pointLivraison_id');
    }
}