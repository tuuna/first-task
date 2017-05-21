<?php

class ChartController extends ChartRepository
{
    public function getHourChartData($id)
    {
        $data = $this->getXyData($id);
        echo View::getView()->make('orderChart',[
            'xdata' => $data['x'],
            'ydata' => json_encode($data['y']),
            'ydata2' => json_encode($data['z'])
        ])->render();
    }

}