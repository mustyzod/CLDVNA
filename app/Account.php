<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
   	/**
     * Prevent accidental insertion of id since it is on auto increment.
     * 
     */
    protected $id = ['id'];
}
