<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class target extends Model
{
    //
    protected $table ='targets';
    protected $primaryKey ='id';
    protected $fillable = ['recieveDate','target'];
}
