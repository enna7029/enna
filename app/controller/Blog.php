<?php


namespace app\controller;

use app\BaseController;

class Blog
{
    //查列表
    public function index()
    {
        echo 'index';
    }

    //要增加的数据展示
    public function create()
    {
        echo 'create';
    }

    //增
    public function save()
    {
        echo 'save';
    }

    //删
    public function delete()
    {
        echo 'delete';
    }

    //改
    public function update()
    {
        echo 'update';
    }

    //查单个
    public function read($id)
    {
        echo $id;
    }

    //查单个
    public function edit($id)
    {
        echo $id;
    }
}