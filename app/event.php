<?php
return [
    //事件绑定:将复杂的事件写为一个类,并绑定一个标识;简单的事件不需要此配置
    'bind' => [
    ],
    //事件监听:注册一个事件监听,key是事件标识符,value是事件执行者
    'listen' => [
        'AppInit' => [],
        'HttpRun' => [],
        'HttpEnd' => [],
        'LogLevel' => [],
        'LogWrite' => [],
    ],
    //事件订阅:可以在一个订阅类中监听多个事件,避免了一个复杂事件在listen中定义的情况
    'subscribe' => [
    ],
];