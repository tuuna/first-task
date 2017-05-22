<?php

class ChartRepository
{
    public function getOrderHourData($id)
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

    public function isDateExist($id,$date)
    {
        if(StaticHour::where('o_id',$id)->whereDate('day',$date)->get()->count()) {
            return true;
        } else {
            return false;
        }
    }


    public function getStaticOrderHourData($id,$date)
    {
        $details = StaticHour::where(['o_id' => $id])->whereDate('day',$date)->orderBy('hour')->get();
        foreach($details as $detail) {
            $x[] = $detail['hour'];
            $y['name'] = '点击IP';
            $y['data'][] = $detail['click_ip'];
            $z['name'] = '点击流量';
            $z['data'][] = $detail['click_pv'];
            $a['name'] = '曝光IP';
            $a['data'][] = $detail['flow_ip'];
            $b['name'] = '曝光流量';
            $b['data'][] = $detail['flow_pv'];

        }
        return ['x' => $x,'y' => $y,'z' => $z,'a' => $a,'b' => $b];
    }
}