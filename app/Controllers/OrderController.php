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
            if($info = $this->create($_POST)) {
                if($this->createHour($info->id)) {
                    $this->redirect('order');
                }
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


    /**
     * @param $id
     * 修改或添加每小时需求量
     */
    public function hourEditPage($id)
    {
            $detail = $this->getCertainHourData($id);
            echo View::getView()->make('orderHourEdit',['detail' => $detail])->render();
    }

    public function hourEdit()
    {
        if(!empty($_POST)) {
            if($this->updateHour($_POST)) {
                $this->redirect('order/hour/list');
            } else {
                $this->redirect('error');
            }
        }
    }

    /**
     * 每小时需求量表格
     */
    public function hourList()
    {
        $details = $this->getHourList();
        echo View::getView()->make('orderHourList',['details' => $details])->render();
    }
}