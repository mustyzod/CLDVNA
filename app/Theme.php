<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Theme extends Model
{
   /**
     * Prevent accidental insertion of id since it is on auto increment.
     * 
     */
    protected $id = ['id'];
}
