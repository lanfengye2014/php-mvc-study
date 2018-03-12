<?php
/**
 * Created by PhpStorm.
 * User: Lanfengye
 * Date: 2016-5-23
 * Time: 23:13
 */
 class indexController extends BaseController{
     function index(){
         $this->assign(array('username'=>'KUDOSBAY'));
         $this->display('index.tpl');
     }
 }