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
            //是否单日志文件
            'single' => false,
            //文件大小限制
            'file_size' => 2097152,
            //独立日志
            'apart_level' => [],
            //最大日志文件数量
            'max_files' => 0,
            //json格式
            'json' => false,
            //日志格式
            'format' => '[%s][%s] %s',
            //是否实时写入
            'realtime_write' => false,
            //是否关闭
            'close' => false,
        ],
        'socket' => [
            'type' => 'Socket'
        ]
    ],
];