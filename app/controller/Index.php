<?php

namespace app\controller;

use app\BaseController;
use Enna\Framework\Facade\Log;
use Enna\Framework\Facade\Cache;

class Index extends BaseController
{
    public function index()
    {
        Cache::set('name',11111);
        //Log::record('1212');
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