<?php

class ChartController extends ChartRepository
{
    /**
     * @param $id
     * 每小时需求量表格
     */
    public function getHourChartData($id)
    {
        $data = $this->getOrderHourData($id);
        echo View::getView()->make('orderHourChart',[
            'xdata' => $data['x'],
            'ydata' => json_encode($data['y']),
            'ydata2' => json_encode($data['z'])
        ])->render();
    }


    /**
     * @param $id
     * 统计每日每小时的数据
     */
    public function selectHourDate($id)
    {
        echo View::getView()->make('selectHourDate',['o_id' => $id])->render();
    }

    public function getFinalData()
    {
        if(!empty($_POST)) {
            if($this->isDateExist($_POST['o_id'],$_POST['date'])) {
                $this->getStaticHourChartData($_POST['o_id'],$_POST['date']);
            } else {
                echo View::getView()->make('hasNoResult')->render();
            }
        } else {
            echo View::getView()->make('error')->render();
        }

    }

    public function getStaticHourChartData($id,$date)
    {
        $datetime = explode('-',$date);
        $date_str = $datetime[0]."年".$datetime[1]."月".$datetime[2]."日";
        $data = $this->getStaticOrderHourData($id,$date);
        echo View::getView()->make('orderStaticHourChart',[
            'xdata' => $data['x'],
            'ydata' => json_encode($data['y']),
            'ydata2' => json_encode($data['z']),
            'ydata3' => json_encode($data['a']),
            'ydata4' => json_encode($data['b']),
            'date' => $date_str
        ])->render();
    }

    /**
     * @param $id
     * 统计每日的数据
     */
    public function getFinalDayData($id)
    {
            if($this->isDayDateExist($id)) {
                $this->getStaticDayChartData($id);
            } else {
                echo View::getView()->make('hasNoResult')->render();
            }
    }

    public function getStaticDayChartData($id)
    {
        $data = $this->getStaticOrderDayData($id);
        $name = $this->getOrderName($id);
        echo View::getView()->make('orderStaticDayChart',[
            'ydata' => json_encode($data['y']),
            'ydata2' => json_encode($data['z']),
            'ydata3' => json_encode($data['a']),
            'ydata4' => json_encode($data['b']),
            'name' => $name
        ])->render();
    }

    /**
     * 全量统计数据
     */

    public function totalList()
    {
        $totals = $this->getStaticTotalData();
        echo View::getView()->make('orderStaticTotalList',['totals' => $totals])->render();
    }

    public function getDateTotalData()
    {
        $data = $this->getTotalData();
        echo View::getView()->make('orderStaticTotalChart',[
            'ydata' => json_encode($data['y']),
            'ydata2' => json_encode($data['z']),
            'ydata3' => json_encode($data['a']),
            'ydata4' => json_encode($data['b']),
            'ydata5' => json_encode($data['c']),
            'ydata6' => json_encode($data['d']),
            'ydata7' => json_encode($data['e']),
            'ydata8' => json_encode($data['f'])
        ])->render();
    }


}