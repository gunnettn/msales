<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mgen extends Model
{
    protected $table ='mgens';
    protected $primaryKey ='id';
    protected $fillable = ['recieveDate','target'];
}
