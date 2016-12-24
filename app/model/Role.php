<?php
/**
 * Created by PhpStorm.
 * User: Joy_Admin
 * Date: 23/12/2016
 * Time: 15:41
 */

namespace App\model;

use Zizaco\Entrust\EntrustRole;

class Role extends EntrustRole
{
    protected $collection = 'roles';
    protected $primaryKey = '_id';
}