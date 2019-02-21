<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
  	/**
     * Prevent accidental insertion of id since it is on auto increment.
     * 
     */
    protected $id = ['id'];
}
