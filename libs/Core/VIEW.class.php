<?php
/**
 * Created by PhpStorm.
 * User: Lanfengye
 * Date: 2016-5-23
 * Time: 20:38
 */
class VIEW{
    public static  $view;

    /**
     * @param $viewtype
     * @param $config
     */
    public  static  function  init($viewtype,$config){
        self::$view=new $viewtype;
//        foreach($config as $key=>$value){
//            self::$view->$key=$value;
//        }
    }

    /**
     * @param $data
     */
    public  static  function assign($data){
        foreach($data as $key=>$value){
            self::$view->assign($key,$value);
        }
    }

    public  static  function  display($template){
        self::$view->display($template);
    }
}