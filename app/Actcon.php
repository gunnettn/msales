<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actcon extends Model
{
    protected $table ='actcons';
    protected $primaryKey ='id';
    protected $fillable = ['recieveDate','target'];
}
