<?php

namespace App\Http\Controllers\Weixin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function test(){
        $goods=[
            'goods_id'=>111,
            'goods_name'=>'iphone',
            'price'=>3000,
        ];
        return $goods;
    }
}
