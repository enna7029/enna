<?php
return [
    //默认缓存驱动`
    'default' => 'file',
    //缓存连接方式
    'stores' => [
        //驱动名称file
        'file' => [
            //驱动方式
            'type' => 'File',
            //缓存保存目录
            'path' => '',
            //缓存前缀
            'prefix' => '',
            //缓存有效期 0表示永久缓存
            'expire' => 0,
            //缓存标签前缀
            'tag_prefix' => 'tag:',
            //序列化机制
            'serialize' => []
        ],
        //驱动名称redis
        'redis' => [

        ],
    ],
];