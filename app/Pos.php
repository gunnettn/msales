<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pos extends Model
{
    protected $table ='pos';
    protected $primaryKey ='id';
    protected $fillable = ['recieveDate','target'];
}
