<?php

namespace app\controller;

use app\BaseController;
use Enna\Framework\Facade\Log;

class Index extends BaseController
{
    public function index()
    {
        Log::record('这是最后一轮测试','test');
    }

    public function test($id)
    {
        echo $id;
    }

    public function get()
    {
        echo 11111;
    }

    public function post()
    {
        echo 222;
    }

    public function rule()
    {
        echo 333;
    }

    public function miss()
    {
        echo 'miss_测试';
    }

    public function allow()
    {
        echo 'allow';
    }

}