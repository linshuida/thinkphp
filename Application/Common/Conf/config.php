<?php
return array(
	//'配置项'=>'配置值'
    'URL_ROUTER_ON' => true,   //路由重写功能
    'URL_ROUTER_RULES' => array(
        'blogs/:id' => array('Index/read'),
        'article/:id' =>array('Article/show'),
    ),//'路由表达式'=>'路由地址和传入参数'
    'URL_MAP_RULES' => array(
        'new/top' => 'Index/top?type=top'
    ),
    'SHOW_ERROR_MSG'        =>  true,
    'DB_TYPE' => 'mysql',
    'DB_HOST' => 'localhost',
    'DB_USER' => 'root',
    'DB_PSW' => '123456',
    'DB_NAME' => 'think',
    'DB_PORT' => '3306',
    'DB_PREFIX' => 'think_',

);