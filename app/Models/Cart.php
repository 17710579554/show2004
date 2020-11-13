<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $table = 'p_cart';
    public $timestamps = false;
    protected $primaryKey = 'id';
    protected $guarded = [];   //黑名单  create只需要开启
}
