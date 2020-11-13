@extends('layouts.cartadd')
@section('title','购物车')
@section('cartadd')


    <!--All goods-->
    <div class="cart-main">
        <div class="yui3-g cart-th">
            <div class="yui3-u-1-4"><input type="checkbox" name="" id="" value="" /> 全部</div>
            <div class="yui3-u-1-4">商品</div>
            <div class="yui3-u-1-8">数量</div>

            <div class="yui3-u-1-8">小计（元）</div>
            <div class="yui3-u-1-8">操作</div>
        </div>
        <div class="cart-item-list">
            <div class="cart-shop">
                <input type="checkbox" name="" id="" value="" />
                <span class="shopname self">传智自营</span>
            </div>
            <div class="cart-body">
                <!-- sss -->
                @foreach($goods as $v)
                    <div class="cart-list">
                        <ul class="goods-list yui3-g">
                            <li class="yui3-u-1-24">
                                <input type="checkbox" name="" id="" value="" />

                            <li class="yui3-u-11-24">
                                <div class="good-item">
                                    <div class="item-img"><img src="/upload/{{$v->goods_img}}" /></div>

                                    @if($v->goods_number<'1')
                                        <div class="item-msg" style="color:darkgray">{{$v->goods_name}}</div>
                                    @else
                                        <div class="item-msg">{{$v->goods_name}}</div>
                                    @endif
                                    @if($v->goods_number>10)
                                        <div class="item-msg" style="color:rebeccapurple">库存正常</div>
                                    @elseif($v->goods_number=='0')
                                        <div class="item-msg" style="color:mediumseagreen">该商品已下架</div>
                                    @else
                                        <div class="item-msg" style="color:hotpink">1.库存紧张</div>
                                    @endif

                                </div>
                                <>






                            <li class="yui3-u-1-8">
                                <a href="javascript:void(0)" class="increment mins">-</a>
                                <input autocomplete="off" type="text" value="{{$v->goods_num}}" minnum="1" class="itxt" />
                                <a href="javascript:void(0)" class="increment plus">+</a>
                                <>
                            <li class="yui3-u-1-8"><span class="sum">{{$v->goods_num * $v->shop_price}}</span><>
                            <li class="yui3-u-1-8">
                                <a href="#none">删除</a><br />
                                <a href="#none">移到我的关注</a>
                        </ul>
                    </div>


            @endforeach
            <!-- sssend -->
            </div>
            <div class="cart-tool">
                <div class="select-all">
                    <input type="checkbox" name="" id="" value="" />
                    <span>全选</span>
                </div>
                <div class="option">
                    <a href="#none">删除选中的商品</a>
                    <a href="#none">移到我的关注</a>
                    <a href="#none">清除下柜商品</a>
                </div>
                <div class="toolbar">
                    <div class="chosed">已选择<span>0</span>件商品</div>
                    <div class="sumprice">
                        <span><em>总价（不含运费） ：</em><i class="summoney">¥9999.00</i></span>
                        <span><em>已节省：</em><i>-¥20.00</i></span>
                    </div>
                    <div class="sumbtn">
                        <a class="sum-btn" href="getOrderInfo.html" target="_blank">结算</a>
                    </div>
                </div>
            </div>
        </div>
@endsection
