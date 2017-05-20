<?php

class OrderController extends OrderRepository
{
    /**
     * 订单列表
     */
    public function index()
    {
        $orders = Order::where('type',0)->get();
        echo View::getView()->make('home', ['a' => $a,'b' => 'failure!','orders' => $orders])->render();
    }
}