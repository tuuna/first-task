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

    public function orderFindId()
    {
        if(!empty($_POST)) {
            if($order = $this->hasOneIdResult($_POST)) {
                echo View::getView()->make('hasOneResult',['order' => $order])->render();
            } else {
                echo View::getView()->make('hasNoResult')->render();
            }
        } else {
            echo VIew::getView()->make('error')->render();
        }
    }

    public function orderFindName()
    {
        if(!empty($_POST)) {
            if($order = $this->hasOneResult($_POST)) {
                echo View::getView()->make('hasOneResult',['order' => $order])->render();
            } elseif ($orders = $this->hasManyResult($_POST)) {
                echo View::getView()->make('order',['orders' => $orders])->render();
            } else {
                echo View::getView()->make('hasNoResult')->render();
            }
        } else {
            echo VIew::getView()->make('error')->render();
        }
    }

    public function orderFindDate()
    {
        if(!empty($_POST)) {
            if($order = $this->hasOneDateResult($_POST)) {
                echo View::getView()->make('hasOneResult',['order' => $order])->render();
            } elseif ($orders = $this->hasManyDateResult($_POST)) {
                echo View::getView()->make('order',['orders' => $orders])->render();
            } else {
                echo View::getView()->make('hasNoResult')->render();
            }
        } else {
            echo VIew::getView()->make('error')->render();
        }
    }

    public function orderFindAll()
    {
        if(!empty($_POST)) {
            if(!empty($_POST['id']) && empty($_POST['name']) && empty($_POST['start-date']) && empty($_POST['end-date'])) {
                if($order = $this->hasOneIdResult($_POST)) {
                    echo View::getView()->make('hasOneResult',['order' => $order])->render();
                } else {
                    echo View::getView()->make('hasNoResult')->render();
                }
            } elseif (empty($_POST['id']) && !empty($_POST['name']) && empty($_POST['start-date']) && empty($_POST['end-date'])) {
                if($order = $this->hasOneResult($_POST)) {
                    echo View::getView()->make('hasOneResult',['order' => $order])->render();
                } elseif ($orders = $this->hasManyResult($_POST)) {
                    echo View::getView()->make('order',['orders' => $orders])->render();
                } else {
                    echo View::getView()->make('hasNoResult')->render();
                }
            } elseif(empty($_POST['id']) && empty($_POST['name']) && !empty($_POST['start-date']) && !empty($_POST['end-date'])) {
                if($order = $this->hasOneDateResult($_POST)) {
                    echo View::getView()->make('hasOneResult',['order' => $order])->render();
                } elseif ($orders = $this->hasManyDateResult($_POST)) {
                    echo View::getView()->make('order',['orders' => $orders])->render();
                } else {
                    echo View::getView()->make('hasNoResult')->render();
                }
            } elseif (!empty($_POST['id']) && !empty($_POST['name']) && empty($_POST['start-date']) && empty($_POST['end-date'])) {
                if($order = $this->hasOneIdResult($_POST)) {
                    echo View::getView()->make('hasOneResult',['order' => $order])->render();
                } else {
                    echo View::getView()->make('hasNoResult')->render();
                }
            } elseif (!empty($_POST['id']) && empty($_POST['name']) && !empty($_POST['start-date']) && !empty($_POST['end-date'])) {
                if($order = $this->hasOneDateIdResult($_POST)) {
                    echo View::getView()->make('hasOneResult',['order' => $order])->render();
                } elseif ($orders = $this->hasManyDateIdResult($_POST)) {
                    echo View::getView()->make('order',['orders' => $orders])->render();
                } else {
                    echo View::getView()->make('hasNoResult')->render();
                }
            } elseif (empty($_POST['id']) && !empty($_POST['name']) && !empty($_POST['start-date']) && !empty($_POST['end-date'])) {
                if($order = $this->hasOneNameDateResult($_POST)) {
                    echo View::getView()->make('hasOneResult',['order' => $order])->render();
                } elseif ($orders = $this->hasManyNameDateResult($_POST)) {
                    echo View::getView()->make('order',['orders' => $orders])->render();
                } else {
                    echo View::getView()->make('hasNoResult')->render();
                }
            } elseif (!empty($_POST['id']) && !empty($_POST['name']) && !empty($_POST['start-date']) && !empty($_POST['end-date'])) {
                if($order = $this->hasOneDateIdResult($_POST)) {
                    echo View::getView()->make('hasOneResult',['order' => $order])->render();
                } elseif ($orders = $this->hasManyDateIdResult($_POST)) {
                    echo View::getView()->make('order',['orders' => $orders])->render();
                } else {
                    echo View::getView()->make('hasNoResult')->render();
                }
            } else {
                echo View::getView()->make('error')->render();
            }
        } else {
            echo View::getView()->make('error')->render();
        }

    }

    public function orderFindAllChart()
    {
        if(!empty($_POST)) {
            if(!empty($_POST['id']) && empty($_POST['name']) && empty($_POST['start-date']) && empty($_POST['end-date'])) {
                if($order = $this->hasOneIdResult($_POST)) {
                    echo View::getView()->make('hasOneChartResult',['order' => $order])->render();
                } else {
                    echo View::getView()->make('hasNoResult')->render();
                }
            } elseif (empty($_POST['id']) && !empty($_POST['name']) && empty($_POST['start-date']) && empty($_POST['end-date'])) {
                if($order = $this->hasOneResult($_POST)) {
                    echo View::getView()->make('hasOneChartResult',['order' => $order])->render();
                } elseif ($orders = $this->hasManyResult($_POST)) {
                    echo View::getView()->make('chats',['orders' => $orders])->render();
                } else {
                    echo View::getView()->make('hasNoResult')->render();
                }
            } elseif(empty($_POST['id']) && empty($_POST['name']) && !empty($_POST['start-date']) && !empty($_POST['end-date'])) {
                if($order = $this->hasOneDateResult($_POST)) {
                    echo View::getView()->make('hasOneChartResult',['order' => $order])->render();
                } elseif ($orders = $this->hasManyDateResult($_POST)) {
                    echo View::getView()->make('chats',['orders' => $orders])->render();
                } else {
                    echo View::getView()->make('hasNoResult')->render();
                }
            } elseif (!empty($_POST['id']) && !empty($_POST['name']) && empty($_POST['start-date']) && empty($_POST['end-date'])) {
                if($order = $this->hasOneIdResult($_POST)) {
                    echo View::getView()->make('hasOneChartResult',['order' => $order])->render();
                } else {
                    echo View::getView()->make('hasNoResult')->render();
                }
            } elseif (!empty($_POST['id']) && empty($_POST['name']) && !empty($_POST['start-date']) && !empty($_POST['end-date'])) {
                if($order = $this->hasOneDateIdResult($_POST)) {
                    echo View::getView()->make('hasOneChartResult',['order' => $order])->render();
                } elseif ($orders = $this->hasManyDateIdResult($_POST)) {
                    echo View::getView()->make('chats',['orders' => $orders])->render();
                } else {
                    echo View::getView()->make('hasNoResult')->render();
                }
            } elseif (empty($_POST['id']) && !empty($_POST['name']) && !empty($_POST['start-date']) && !empty($_POST['end-date'])) {
                if($order = $this->hasOneNameDateResult($_POST)) {
                    echo View::getView()->make('hasOneChartResult',['order' => $order])->render();
                } elseif ($orders = $this->hasManyNameDateResult($_POST)) {
                    echo View::getView()->make('chats',['orders' => $orders])->render();
                } else {
                    echo View::getView()->make('hasNoResult')->render();
                }
            } elseif (!empty($_POST['id']) && !empty($_POST['name']) && !empty($_POST['start-date']) && !empty($_POST['end-date'])) {
                if($order = $this->hasOneDateIdResult($_POST)) {
                    echo View::getView()->make('hasOneChartResult',['order' => $order])->render();
                } elseif ($orders = $this->hasManyDateIdResult($_POST)) {
                    echo View::getView()->make('chats',['orders' => $orders])->render();
                } else {
                    echo View::getView()->make('hasNoResult')->render();
                }
            } else {
                echo View::getView()->make('error')->render();
            }
        } else {
            echo View::getView()->make('error')->render();
        }
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
        if(!empty($_POST) && $this->validateOrderAdd($_POST)) {
            if($this->create($_POST)) {
                $this->redirect('order');
            } else {
                $this->redirect('error');
            }
        } else {
            $this->redirect('error');
        }
    }

    /**
     * @param $id
     * 订单修改
     */
    public function editPage($id)
    {
//        $order = $this->getOrderInfo($id);

            echo View::getView()->make('orderEdit',['order'=> $this->getCertainOrder($id)])->render();

//            echo View::getView()->make('error')->render();
//        }
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
     * orderStaticList
     * 数据统计列表
     */
    public function orderStaticList()
    {
        $orders = $this->getOrderList();
        echo View::getView()->make('orderStaticList', ['orders' => $orders])->render();
    }

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

    /**
     * @param $id
     * 状态改变
     */
    public function statusDefault($id)
    {
        if($this->changeStatus($id,'default')) {
            $this->index();
        } else {
            echo View::getView()->make('error')->render();
        }
    }

    public function statusStart($id)
    {
        if($this->changeStatus($id,'start')) {
            $this->index();
        } else {
            echo View::getView()->make('error')->render();
        }
    }

    public function statusStop($id)
    {
        if($this->changeStatus($id,'stop')) {
            $this->index();
        } else {
            echo View::getView()->make('error')->render();
        }
    }

    public function statusShutdown($id)
    {
        if($this->changeStatus($id,'shutdown')) {
            $this->index();
        } else {
            echo View::getView()->make('error')->render();
        }
    }

}