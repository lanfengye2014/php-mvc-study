<?php
/**
 * Created by PhpStorm.
 * User: Lanfengye
 * Date: 2016-5-23
 * Time: 11:09
 */
class BaseView extends Smarty{
    function __construct()
    {
        parent::__construct();
        $this->debugging = false;
        $this->caching = true;
        $this->cache_lifetime = 120;
        $this->left_delimiter="{";
        $this->right_delimiter="}";
        $this->setTemplateDir("/tpl/");
        $this->setCacheDir("/cache/");
        $this->setCompileDir("/template_c/");
    }
}

