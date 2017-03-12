<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tran extends Model
{
    protected $table ='trans';
    protected $primaryKey ='id';
    protected $fillable = ['recieveDate','target'];
}
