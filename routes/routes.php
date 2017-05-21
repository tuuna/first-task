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

//Macaw::get('/hour','OrderController@hourChart');

Macaw::get('/hour/(:num)','ChartController@getHourChartData');

Macaw::get('/error',function(){
    echo View::getView()->make('error')->render();
});

Macaw::dispatch();