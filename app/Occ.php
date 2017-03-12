<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Occ extends Model
{
    protected $table ='occs';
    protected $primaryKey ='id';
    protected $fillable = ['recieveDate','target'];
}
