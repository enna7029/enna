<?php

namespace app;

use Enna\Framework\App;
use Enna\Framework\Request;

abstract class BaseController
{
    /**
     * 应用实例
     * @var App
     */
    protected $app;

    /**
     * Request实例
     * @var Request
     */
    protected $request;

    public function __construct(App $app)
    {
        $this->app = $app;
        $this->request = $this->app->request;
    }
}