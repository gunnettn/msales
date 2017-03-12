<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class concession extends Model
{
    protected $table ='concessions';
    protected $primaryKey ='id';
    protected $fillable = ['recieveDate','target'];
}
