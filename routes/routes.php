<?php
use NoahBuscher\Macaw\Macaw;

Macaw::get('/', function(){
    echo View::getView()->make('home')->render();
});


Macaw::get('/order','OrderController@index');
Macaw::get('/order/edit/(:num)','OrderController@editPage');
Macaw::post('/order/edit/complete','OrderController@edit');
Macaw::get('/order/add','OrderController@addPage');
Macaw::post('/order/add/complete','OrderController@add');
Macaw::get('/order/add/hour/add','OrderController@hourAddPage');
Macaw::post('/order/add/hour/complete','OrderController@hourAdd');
Macaw::get('/order/edit/hour/(:num)','OrderController@hourEditPage');
Macaw::post('/order/edit/hour/complete','OrderController@hourEdit');
Macaw::get('/order/hour/list','OrderController@hourList');


Macaw::get('/hour/(:num)','ChartController@getHourChartData');
Macaw::get('/hour-static/(:num)','ChartController@getFinalData');
Macaw::get('/day-static/(:num)','ChartController@getFinalDayData');
Macaw::get('/all-statistic','ChartController@totalList');
Macaw::get('/all-statistic/total','ChartController@getDateTotalData');
Macaw::get('/orderStaticList','OrderController@orderStaticList');

Macaw::post('/order/find/all','OrderController@orderFindAll');
Macaw::post('/order/find/all/charts','OrderController@orderFindAllChart');
Macaw::post('/all-statistic/total/find','ChartController@orderFindTotal');

Macaw::get('/order/default/(:num)','OrderController@statusDefault');
Macaw::get('/order/start/(:num)','OrderController@statusStart');
Macaw::get('/order/stop/(:num)','OrderController@statusStop');
Macaw::get('/order/shutdown/(:num)','OrderController@statusShutdown');

/*Macaw::get('/url-manage/(:num)','UrlController@list');
Macaw::get('/url-manage/add/(:num)','UrlController@addPage');
Macaw::post('/url-manage/add/complete','UrlController@add');
Macaw::get('/url-manage/edit/(:num)','UrlController@editPage');
Macaw::post('/url-manage/edit/complete','UrlController@edit');*/
Macaw::get('/error',function(){
    echo View::getView()->make('error')->render();
});

Macaw::get('/test','TestController@index');
Macaw::dispatch();