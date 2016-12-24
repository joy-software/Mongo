<?php
/**
 * Created by PhpStorm.
 * User: Joy_Admin
 * Date: 14/12/2016
 * Time: 06:08
 */

namespace App\model;

use Jenssegers\Mongodb\Eloquent\Model;

class Camion extends  Model
{
    protected $collection = 'camion';
    protected $primaryKey = '_id';
}