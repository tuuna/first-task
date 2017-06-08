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

    public function isHourExist($id)
    {
        if(StaticHour::where('o_id',$id)->get()->count()) {
            return StaticHour::where('o_id',$id)->orderBy('day','DESC')->get();
        } else {
            return false;
        }
    }

    public function isDayDateExist($id)
    {
        if(StaticDay::where('o_id',$id)->get()->count()) {
            return true;
        } else {
            return false;
        }
    }

    public function getOrderName($id)
    {
        return Order::where('id',$id)->first()->title;
    }

    public function getCertainOrderDates($id)
    {
        if(StaticHour::where('o_id',$id)->get()->count()) {
            foreach(StaticHour::where('o_id',$id)->get() as $item) {
                $arr[] = explode(' ',$item['day'])[0];
            }
            $arr = array_unique($arr);
            return $arr;
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

    public function getStaticOrderDayData($id)
    {
        $details = StaticDay::where(['o_id' => $id])->orderBy('day')->get();
        foreach($details as $detail) {
            $day = explode(' ',$detail['day'])[0];
            $y['name'] = '点击IP';
            $y['data'][] = [$day,$detail['click_ip']];
            $z['name'] = '点击流量';
            $z['data'][] = [$day,$detail['click_pv']];
            $a['name'] = '曝光IP';
            $a['data'][] = [$day,$detail['flow_ip']];
            $b['name'] = '曝光流量';
            $b['data'][] = [$day,$detail['flow_pv']];
        }
        return ['y' => $y,'z' => $z,'a' => $a,'b' => $b];
    }

    public function getStaticTotalData()
    {
        $totals = StaticTotal::all();
        foreach ($totals as $total) {
            $total['day'] = explode(' ',$total['day'])[0];
        }
        return $totals;
    }
    public function getRangeTotalData($data)
    {
        if(StaticTotal::where('day','>=',$data['start-date'])->where('day','<=',$data['end-date'])->get()->count()) {
            $details = StaticTotal::where('day','>=',$data['start-date'])->where('day','<=',$data['end-date'])->get();
            foreach($details as $detail) {
                $day = explode(' ',$detail['day'])[0];
                $y['name'] = '点击IP';
                $y['data'][] = [$day,$detail['click_ip']];
                $z['name'] = '点击流量';
                $z['data'][] = [$day,$detail['click_pv']];
                $a['name'] = '点击IP使用量';
                $a['data'][] = [$day,$detail['click_ip_use']];
                $b['name'] = '点击流量使用量';
                $b['data'][] = [$day,$detail['click_pv_use']];
                $c['name'] = '曝光IP';
                $c['data'][] = [$day,$detail['flow_ip']];
                $d['name'] = '曝光流量';
                $d['data'][] = [$day,$detail['flow_pv']];
                $e['name'] = '曝光IP使用量';
                $e['data'][] = [$day,$detail['flow_ip_use']];
                $f['name'] = '曝光流量使用量';
                $f['data'][] = [$day,$detail['flow_pv_use']];
            }
            return ['y' => $y,'z' => $z,'a' => $a,'b' => $b,'c' => $c,'d' => $d,'e' => $e,'f' => $f];
        } else {
            return false;
        }
    }

    public function getTotalData()
    {
        $details = StaticTotal::orderBy('day')->get();
        foreach($details as $detail) {
            $day = explode(' ',$detail['day'])[0];
            $y['name'] = '点击IP';
            $y['data'][] = [$day,$detail['click_ip']];
            $z['name'] = '点击流量';
            $z['data'][] = [$day,$detail['click_pv']];
            $a['name'] = '点击IP使用量';
            $a['data'][] = [$day,$detail['click_ip_use']];
            $b['name'] = '点击流量使用量';
            $b['data'][] = [$day,$detail['click_pv_use']];
            $c['name'] = '曝光IP';
            $c['data'][] = [$day,$detail['flow_ip']];
            $d['name'] = '曝光流量';
            $d['data'][] = [$day,$detail['flow_pv']];
            $e['name'] = '曝光IP使用量';
            $e['data'][] = [$day,$detail['flow_ip_use']];
            $f['name'] = '曝光流量使用量';
            $f['data'][] = [$day,$detail['flow_pv_use']];
        }
        return ['y' => $y,'z' => $z,'a' => $a,'b' => $b,'c' => $c,'d' => $d,'e' => $e,'f' => $f];
    }
}