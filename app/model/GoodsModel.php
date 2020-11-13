<?php
namespace App\Model;

use Illuminate\Database\Eloquent\model;


class GoodsModel extends model{
    protected $table= 'p_goods';
    protected $primaryKey ='goods_id';
    public $timestamps =false;
}
