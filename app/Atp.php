<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Atp extends Model
{
    protected $table ='atps';
    protected $primaryKey ='id';
    protected $fillable = ['recieveDate','target'];
}
