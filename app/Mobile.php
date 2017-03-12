<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mobile extends Model
{
    protected $table ='mobiles';
    protected $primaryKey ='id';
    protected $fillable = ['recieveDate','target'];
}
