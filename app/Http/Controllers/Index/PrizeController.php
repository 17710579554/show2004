<?php

namespace App\Http\Controllers\Index;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PrizeController extends Controller
{
    //抽奖
    public function index(){
        return view('prize.index');
    }
    public function start(){
        $rand = mt_rand(1,10);
        //echo $rand;
        $prize=0;
        if($rand == 6){
            $prize=1;
        }else if($rand == 5){
            $prize=2;
        }

        $data = [
            'error' => 0,
            'msg' => 'OK',
            'data' => [
                'prize' => $prize,
            ]
        ];
        return $data;


    }


}
