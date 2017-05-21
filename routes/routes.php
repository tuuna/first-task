<?php
use NoahBuscher\Macaw\Macaw;

Macaw::get('/', function(){
    echo View::getView()->make('home')->render();
});

//Macaw::get('/','OrderController@index');
/*Macaw::get('(:all)', function($fu) {
    echo '未匹配到路由<br>'.$fu;
});*/

Macaw::get('/order','OrderController@index');
Macaw::dispatch();