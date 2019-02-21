<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    /**
     * Prevent accidental insertion of id since it is on auto increment.
     * 
     */
    protected $id = ['id'];
}
