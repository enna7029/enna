<?php
return [
    //默认日志通道
    'default' => 'file',
    //日志记录级别
    'level' => [],
    //日志类型记录的通道
    'type_channel' => [],
    //日志通道列表
    'channels' => [
        'file' => [
            //日志记录的方式
            'type' => 'File',
            //日志记录的路径
            'path' => '',
            //是否实时写入
            'realtime_write' => false,
        ],
        'socket' => [
            'type' => 'Socket'
        ]
    ],
];