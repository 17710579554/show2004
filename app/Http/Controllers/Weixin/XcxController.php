<?php

namespace App\Http\Controllers\weixin;

use App\Http\Controllers\Controller;
use App\Model\Xcx_user;
use App\Model\Goods;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;
class XcxController extends Controller
{
    public function login(Request $request){
        //接收code
       $code=$request->get('code');
       //echo $code;
        //使用code
        $url='https://api.weixin.qq.com/sns/jscode2session?appid='.env('WX_XCX_APPID').'&secret='.env('WX_XCX_SECRET').'&js_code='.$code.'&grant_type=authorization_code';
        $data=json_decode(file_get_contents($url),true);
       //echo '<pre>';print_r($data);echo '</pre>';

       //自定义登陆状态
        if(isset($data['errcode'])){
            $response=[
                'error'=>50001,
                'msg'=>'登录失败',
            ];
        }else{
            $openid=$data['openid'];
            Xcx_user::insert(['openid'=>$openid]);
            $token =sha1($data['openid'].$data['session_key'].mt_rand(0,999999));
          //  echo $token;

            //保存token
            $redis_key='xcx_token:'.$token;
            Redis::set($redis_key,time());
            //设置过期时间
            Redis::expire($redis_key,7200);

            $response=[
                'error'=>0,
                'msg'=>'ok',
                'data'=>[
                    'token'=>$token
                ]

            ];
        }
        return $response;

    }
    //商品详情页
    public function  goods(Request $request){
        $goods_name=Goods::inRandomOrder()->take('10')->get()->toArray();
        return  json_encode($goods_name,256);
    }

    //商品详情
    public function detail(Request $request)
    {
        $goods_id=$request->get('goods_id');
        if(!empty($goods_id)){
            $goods_id=Goods::where('goods_id',$goods_id)->first()->toArray();
            // dd($goods_id);
            return $goods_id;
        }else{
        $token=$request->get('access_token');
        // echo $token;
        //验证token是否有效
        $token_key='h:xcx:login:'.$token;
        echo "key: >>>>>>".$token_key;   echo '<hr>';
        // echo $token;die;

        //检测key是否存在
        $status=Redis::exists($token_key);
        var_dump($status);die;
        // $res=Redis::get($token_key);
        // var_dump($res);die;
        if($status==0){
            $response=[
                'errno'=>40003,
                'msg'=>"未授权"
            ];
            return $response;
        }

    }
    }



}
