<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class action extends Model
{
    protected $table ='actions';
    protected $primaryKey ='id';
    protected $fillable = ['recieveDate','target'];
}
