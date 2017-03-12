<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kiosk extends Model
{
    protected $table ='kiosks';
    protected $primaryKey ='id';
    protected $fillable = ['recieveDate','target'];
}
