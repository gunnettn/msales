<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admcon extends Model
{
    protected $table ='admcons';
    protected $primaryKey ='id';
    protected $fillable = ['recieveDate','target'];
}
