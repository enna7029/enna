<?php

namespace app\controller;

use app\BaseController;

class Index extends BaseController
{
    public function index()
    {
        echo 'Hello World!';
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
        echo 'miss23232';
    }

    public function allow()
    {
        echo 'allow';
    }

}