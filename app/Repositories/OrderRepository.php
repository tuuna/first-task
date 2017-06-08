<?php
//use Illuminate\Contracts\Pagination as Paginate;
class OrderRepository
{


    public function getOrderList()
    {
        return Order::all();
    }

    public function redirect($type = 'order')
    {
        header("Location:/".$type);
        exit();
    }

    public function getCertainOrder($id)
    {
        $hours = Order::with('orderHour')->where('id',$id)->first();
        return [$hours,OrderUrl::where('o_id',$id)->orderBy('flag')->get()];
    }

    public function getOrderInfo($id)
    {
        return Order::where('id',$id)->first();
    }

    public function getFlow($id)
    {
        return [$this->getCertainOrder($id),OrderUrl::where('o_id',$id)->where('flag',2)->first()];
    }

    public function getClick($id)
    {
        return [$this->getCertainOrder($id),OrderUrl::where('o_id',$id)->where('flag',1)->first()];
    }


    public function getCertainHourData($id)
    {
        return OrderHour::where('id',$id)->first();
    }

    public function isHourDataNull($id)
    {
        $model = $this->getCertainHourData($id);
        return $model->count();
    }

    public function createHour($id)
    {
        $i = 0;
        while ($i <24) {
           OrderHour::create([
                'o_id' => $id,
                'hour' => $i
            ]);
           ++$i;
           $k = $i;
        }
        if($k == 24) {
            return true;
        } else {
            return false;
        }
    }

    public function getHourList()
    {
        return Order::with('orderHour')->orderBy('id',ASC)->get();
    }

    public function create(array $data)
    {
        if ($info = $this->createOrder($data)) {
            if($this->createHourData($data,$info->id) && $this->createUrl($data,$info->id)) {
                return true;
            } else {
                Order::where('id',$info->id)->delete();
                return false;
            }
        } else {
            return false;
        }
    }

    public function createOrder(array $data)
    {
        return Order::create([
            'title' => $data['title'],
            'start' => $data['start'],
            'end' => $data['end'],
            'click' => $data['click'],
            'flow' => $data['flow'],
            'remark' => $data['remark'],
            'type' => $data['type'],
            'created' => date('Y-m-d H:i:s',time())
        ]);
    }

    public function createHourData(array $data,$o_id)
    {
        $i = 0;
        while($i < 24) {
           OrderHour::create([
               'o_id' => $o_id,
               'click' => $data['click_hour'][$i],
               'flow' => $data['flow_hour'][$i]
           ]);
           ++$i;
        }
        if($i == 24) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * @param array $data
     * @param $o_id
     * @return bool
     * 这里的代码逻辑还有问题，注意一下
     */
    public function createUrl(array $data,$o_id)
    {
        if(!empty($data['clickUrl'])) {
            OrderUrl::create([
                'o_id' => $o_id,
                'flag' => 1,
                'url'  => trim($data['clickUrl'])
            ]);
        }
        if(!empty($data['flowUrl'])) {
            OrderUrl::create([
                'o_id' => $o_id,
                'flag' => 2,
                'url'  => trim($data['flowUrl'])
            ]);
        }
        return true;
    }

    public function update(array $data)
    {
         Order::where('id',$data['id'])->update([
            'title' => $data['title'],
            'start' => $data['start'],
            'end' => $data['end'],
            'click' => $data['click'],
            'flow' => $data['flow'],
            'remark' => $data['remark'],
            'type' => $data['type'],
        ]);
        $i = 0;
        while($i < 24) {
            OrderHour::where(['o_id' => $data['id'],'hour' => $i])->update([
                'click' => $data['click_hour'][$i],
                'flow' => $data['flow_hour'][$i]
            ]);
            ++$i;
        }
        if($data['click'] == 0) {
            if(OrderUrl::where('o_id', $data['id'])->where('flag' ,1)->first()) {
                OrderUrl::where('o_id', $data['id'])->where('flag' ,1)->delete();
            }
            $order = OrderUrl::where('o_id', $data['id'])->where('flag' ,2)->update([
                    'url' => $data['flowUrl']
            ]);
            $order = 1;
        } elseif($data['flow'] == 0) {
            if(OrderUrl::where('o_id')->where('flag',2)->first()) {
                OrderUrl::where('o_id')->where('flag',2)->delete();
            }
            $order = OrderUrl::where('o_id', $data['id'])->where('flag' ,1)->update([
                    'url' => $data['clickUrl']
            ]);
            $order = 1;
        } else {
                if(OrderUrl::where('o_id',$data['id'])->where('flag',1)->first()) {
                    OrderUrl::where('o_id',$data['id'])->where('flag',1)->update([
                        'url' => $data['clickUrl']
                    ]);
                } else {
                    OrderUrl::create([
                        'o_id' => $data['id'],
                        'flag' => 1,
                        'url' => $data['clickUrl']
                    ]);
                }
                if(OrderUrl::where('o_id',$data['id'])->where('flag',2)->first()) {
                    OrderUrl::where('o_id',$data['id'])->where('flag',2)->update([
                        'url' => $data['flowUrl']
                    ]);
                } else {
                    OrderUrl::create([
                        'o_id' => $data['id'],
                        'flag' => 2,
                        'url' => $data['flowUrl']
                    ]);
                }
                $order = 1;
            }
        if($i == 24 && $order) {
            return true;
        } else {
            return false;
        }
    }

    public function updateHour(array $data)
    {
        return OrderHour::where(['id' => $data['id'],'hour' => $data['hour']])->update([
            'click' => $data['click'],
            'flow' => $data['flow']
        ]);
    }

    public function hasOneIdResult($data)
    {
        return Order::where('id',$data['id'])->first();
    }

    public function hasOneResult($data)
    {
        $data['name'] = '%'.$data['name'].'%';
        if(Order::where('title','like',$data['name'])->get()->count() == 1) {
            return Order::where('title','like',$data['name'])->first();
        }
        return false;
    }

    public function hasManyResult($data)
    {
        $data['name'] = '%'.$data['name'].'%';
        if(Order::where('title','like',$data['name'])->get()->count() > 1) {
            return Order::where('title','like',$data['name'])->get();
        }
        return false;
    }

    public function hasOneDateResult($data)
    {
        if(Order::where('start','>=',$data['start-date'])->where('end','<=',$data['end-date'])->get()->count() == 1) {
            return Order::where('start','>=',$data['start-date'])->where('end','<=',$data['end-date'])->first();
        }
        return false;
    }

    public function hasManyDateResult($data)
    {
        if(Order::where('start','>=',$data['start-date'])->where('end','<=',$data['end-date'])->get()->count() > 1) {
            return Order::where('start','>=',$data['start-date'])->where('end','<=',$data['end-date'])->get();
        }
        return false;
    }

    public function hasOneDateIdResult($data)
    {
        if(Order::where('id',$data['id'])->where('start','>=',$data['start-date'])->where('end','<=',$data['end-date'])->get()->count() == 1) {
            return Order::where('id',$data['id'])->where('start','>=',$data['start-date'])->where('end','<=',$data['end-date'])->first();
        }
        return false;
    }

    public function hasManyDateIdResult($data)
    {

        if(Order::where('id',$data['id'])->where('start','>=',$data['start-date'])->where('end','<=',$data['end-date'])->get()->count() > 1) {
            return Order::where('id',$data['id'])->where('start','>=',$data['start-date'])->where('end','<=',$data['end-date'])->get();
        }
        return false;
    }

    public function hasOneNameDateResult($data)
    {
        $data['name'] = '%'.$data['name'].'%';
        if(Order::where('title','like',$data['name'])->where('start','>=',$data['start-date'])->where('end','<=',$data['end-date'])->get()->count() == 1) {
            return Order::where('title','like',$data['name'])->where('start','>=',$data['start-date'])->where('end','<=',$data['end-date'])->first();
        }
        return false;
    }

    public function hasManyNameDateResult($data)
    {
        if(Order::where('title','like',$data['name'])->where('start','>=',$data['start-date'])->where('end','<=',$data['end-date'])->get()->count() > 1) {
            return Order::where('title','like',$data['name'])->where('start','>=',$data['start-date'])->where('end','<=',$data['end-date'])->get();
        }
        return false;
    }

    public function changeStatus($id,$type)
    {
        switch ($type) {
            case 'default':
                $status = Order::where('id',$id)->update(['state' => 0]);
                break;
            case 'start':
                $status = Order::where('id',$id)->update(['state' => 1]);
                break;
            case 'stop':
                $status = Order::where('id',$id)->update(['state' => 2]);
                break;
            case 'shutdown':
                $status = Order::where('id',$id)->update(['state' => 3]);;
                break;
            default:
                $status = 0;
        }
        if($status) {
            return true;
        } else {
            return false;
        }
    }

    public function validateOrderAdd($data)
    {
        return true;
        $flag1 = 1;
        $flag2 = 1;
        $flag3 = 1;
        if(!empty($data['title'])
            &&!empty($data['start'])
            &&!empty(data['end'])
            &&!empty(data['click'])
            &&!empty(data['flow'])
            &&trim(strlen($data['title']))<50
           ) {
            $flag1 = 1;
        } else {
            $flag1 = 0;
        }

        foreach($data['click_hour'] as $v) {
            if($v < 0 ){
                $flag2 = 0;
            }
        }

        foreach($data['flow_hour'] as $v) {
            if($v < 0 ){
                $flag3 = 0;
            }
        }
        if($flag1 && $flag2 && $flag3) {
            return true;
        } else {
            return false;
        }
    }
}