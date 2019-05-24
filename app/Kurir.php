<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kurir extends Model
{
    protected $table = 'couriers';
    protected $fillable = ['courier'];
}
