<?php

class ChartRepository
{
    public function getXyData($id)
    {
        $details = OrderHour::where('o_id',$id)->get();
        foreach($details as $detail) {
            $x[] = $detail['hour'];
            $y['name'] = '点击量';
            $y['data'][] = $detail['click'];
            $z['name'] = '曝光量';
            $z['data'][] = $detail['flow'];
        }
        return ['x' => $x,'y' => $y,'z' => $z];
    }
}