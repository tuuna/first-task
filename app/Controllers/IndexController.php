<?php

class IndexController
{
    public function index()
    {
        $a = ['1','2',
        '3'];
        $orders = Order::where('id',1)->first();
        echo View::getView()->make('home', ['a' => $a,'b' => 'failure!','orders' => $orders])->render();
        /*echo "控制器";
        $has = "这是参数的测试";
        require dirname(__FILE__).'/../Views/home.php';*/
    }
}