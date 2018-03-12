<?php

/**
 * Created by PhpStorm.
 * User: Lanfengye
 * Date: 2016-5-22
 * Time: 20:42
 */
class BaseController
{

    function __construct()
    {
    }

    function index()
    {
        echo 'BaseController Index';
    }

    public function assign($data)
    {
        VIEW::assign($data);
    }
    public function display($template)
    {
        VIEW::display($template);
    }
}