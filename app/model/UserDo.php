<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class UserDo extends Model
{
    //
    protected $table = 'user';
    public $timestamps = false;
    protected $primaryKey = 'user_id';
    protected $guarded = [];   //黑名单  create只需要开启
}
