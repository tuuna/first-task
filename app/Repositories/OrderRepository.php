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
}