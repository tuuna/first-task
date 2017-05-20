<?php
use NoahBuscher\Macaw\Macaw;

/*Macaw::get('/', function() {
    echo "成功！";
});*/

Macaw::get('/cat', function() {
    echo "成功！!";
});

Macaw::get('/','IndexController@index');
/*Macaw::get('(:all)', function($fu) {
    echo '未匹配到路由<br>'.$fu;
});*/

Macaw::dispatch();