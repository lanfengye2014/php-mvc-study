<?php
/**
 * Created by PhpStorm.
 * User: Lanfengye
 * Date: 2016-5-22
 * Time: 21:01
 */
require_once ('libs/Core/BaseController.class.php');
define('CURRENT_DIR',dirname(__DIR__));
function C($name, $method)
{
    try {
        if(is_file(CURRENT_DIR."/Controller/{$name}Controller.class.php")){
            require_once("/libs/Controller/{$name}Controller.class.php");
            if (isset($name)&&!isset($method)) {
                eval('$obj=new ' . "{$name}" . 'Controller();$obj->' . "index();");
            } else if (isset($name) && isset($method)) {
                $m = strtolower($method);
                eval('$obj=new ' . "{$name}" . 'Controller();$obj->' . "{$m}();");
            }
        }else{
            eval('$obj=new BaseController();$obj->index();');
        }

    } catch (Exception $e) {
        echo('Error->' . $e->getMessage());
    }

}

/**
 * 模型
 * @param $name
 */
function M($name){
    require_once (CURRENT_DIR.DIRECTORY_SEPARATOR.'Model/'.$name.'Model.class.php');
    eval('$obj=new '.$name.'Model();');
    return $obj;
}
function V($name){
    require_once (CURRENT_DIR.DIRECTORY_SEPARATOR.'View/'.$name.'View.class.php');
    eval('$obj=new '.$name.'View();');
    return $obj;
}
function daddslashes($str){
    return (!get_magic_quotes_gpc())?addslashes($str):$str;
}
