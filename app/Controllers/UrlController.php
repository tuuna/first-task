<?php

class UrlController extends UrlRepository
{
    /**
     * 地址列表
     */
    public function list()
    {
        $orders = $this->getUrlList();
        echo View::getView()->make('orderUrlList', ['orders' => $orders])->render();
    }

    /**
     * @param $id
     * 地址添加
     */
    public function addPage($id)
    {
        echo View::getView()->make('orderUrlAdd',['o_id' => $id])->render();
    }

    public function add()
    {
        if(!empty($_POST)) {
            if($this->create($_POST)) {
                $this->redirect('url-manage');
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
        $url = $this->getCertainUrl($id);
        echo View::getView()->make('orderUrlEdit',['url' => $url])->render();
    }

    public function edit()
    {
        if(!empty($_POST)) {
            if($this->update($_POST)) {
                $this->redirect('url-manage');
            } else {
                $this->redirect('error');
            }
        }
    }
}