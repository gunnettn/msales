<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Side extends Model
{
    protected $table ='sides';
    protected $primaryKey ='id';
    protected $fillable = ['recieveDate','target'];
}
