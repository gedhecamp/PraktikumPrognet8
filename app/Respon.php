<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Respon extends Model
{
    protected $table = 'response';
    protected $fillable = ['review_id','admin_id','content'];
}
