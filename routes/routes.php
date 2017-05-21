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

Macaw::get('/error',function(){
    echo View::getView()->make('error')->render();
});

Macaw::dispatch();