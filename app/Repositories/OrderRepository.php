<?php

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
        return Order::where('id',$id)->first();
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
        $i = 1;
        while ($i <25) {
           OrderHour::create([
                'o_id' => $id,
                'hour' => $i
            ]);
           ++$i;
           $k = $i;
        }
        if($k == 25) {
            return true;
        } else {
            return false;
        }
    }

    public function getHourList()
    {
        return Order::with('orderHour')->get();
    }

    public function create(array $data)
    {
        return Order::create([
            'title' => $data['title'],
            'start' => $data['start'],
            'end' => $data['end'],
            'click' => $data['click'],
            'flow' => $data['flow'],
            'remark' => $data['remark'],
            'type' => $data['type'],
            'state' => $data['state'],
            'created' => date('Y-m-d H:i:s',time())
        ]);
    }

    public function update(array $data)
    {
        return Order::where('id',$data['id'])->update([
            'title' => $data['title'],
            'start' => $data['start'],
            'end' => $data['end'],
            'click' => $data['click'],
            'flow' => $data['flow'],
            'remark' => $data['remark'],
            'type' => $data['type'],
            'state' => $data['state']
        ]);
    }

    public function updateHour(array $data)
    {
        return OrderHour::where(['id' => $data['id'],'hour' => $data['hour']])->update([
            'click' => $data['click'],
            'flow' => $data['flow']
        ]);
    }
}