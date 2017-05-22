<?php

class UrlRepository
{
    public function redirect($type = 'order')
    {
        header("Location:/".$type);
        exit();
    }

    public function getUrlList()
    {
        return Order::with('orderUrl')->orderBy('id',ASC)->get();
    }

    public function getCertainUrl($id)
    {
        return OrderUrl::where('id',$id)->first();
    }

    public function create(array $data)
    {
        return OrderUrl::create([
            'o_id' => $data['o_id'],
            'flag' => $data['flag'],
            'url'  => $data['url']
        ]);
    }

    public function update(array $data)
    {
        return OrderUrl::where('id',$data['id'])->update([
            'flag' => $data['flag'],
            'url'  => $data['url']
        ]);
    }
}