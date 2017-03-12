<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class admission extends Model
{
    protected $table ='admissions';
    protected $primaryKey ='id';
    protected $fillable = ['recieveDate','target'];
}
