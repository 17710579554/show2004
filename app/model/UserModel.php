<?php
namespace App\Model;

use Illuminate\Database\Eloquent\model;


class UserModel extends model{
    protected $table= 'p_users';
    protected $primaryKey ='user_id';
    public $timestamps =false;
}
