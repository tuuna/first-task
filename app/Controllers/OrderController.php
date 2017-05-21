<?php

class OrderController extends OrderRepository
{
    /**
     * 订单列表
     */
    public function index()
    {
        $orders = $this->getOrderList();
        echo View::getView()->make('order', ['orders' => $orders])->render();
    }

    /**
     *
     * 订单添加
     */
    public function addPage()
    {
        echo View::getView()->make('orderAdd')->render();
    }

    public function add()
    {
        if(!empty($_POST)) {
            if($this->create($_POST)) {
                $this->redirect('order');
            } else {
                $this->redirect('error');
            }
        }
    }

    /**
     * @param $id
     * 订单修改
     */
    public function editPage($id)
    {
        $order = $this->getCertainOrder($id);
        echo View::getView()->make('orderEdit',['order' => $order])->render();
    }

    public function edit()
    {
        if(!empty($_POST)) {
            if($this->update($_POST)) {
                $this->redirect('order');
            } else {
                $this->redirect('error');
            }
        }
    }

    /**
     * @param $id
     * 订单删除
     */
}