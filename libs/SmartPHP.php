<?php
/**
 * Created by PhpStorm.
 * User: Lanfengye
 * Date: 2016-5-23
 * Time: 20:45
 */
$currentDir = dirname(__FILE__);
include_once($currentDir . DIRECTORY_SEPARATOR . 'require.list.php');
$config = include $currentDir . DIRECTORY_SEPARATOR . "Conf/Config.php";
foreach ($paths as $path) {
    include_once($currentDir . DIRECTORY_SEPARATOR . $path);
}

class SmartPHP
{
    public static $controller;
    public static $method;
    public static $config;

    /**
     *
     */
    private static function init_db()
    {
        DB::init('mysql', self::$config['dbconfig']);
    }

    private static function init_view()
    {
//        VIEW::init('BaseView', self::$config['viewconfig']);
        VIEW::init('BaseView', null);
    }

    private static function init_controller()
    {
        self::$controller=@$_GET['m']?daddslashes($_GET['m']):"Base";
    }

    private static function init_method()
    {
        self::$method=@$_GET['c']?daddslashes($_GET['c']):"index";
    }

    public static function start()
    {
        global $config;
        self::$config['dbconfig'] = $config;
        self::init_db();
        self::init_controller();
        self::init_method();
        self::init_view();
        try {
            $ctrlName = @$_GET['m']?daddslashes($_GET['m']):null;
            $actionName = @$_GET['c']?daddslashes($_GET['c']):null;
            if (isset($ctrlName)) {
                try {
                    C($ctrlName, $actionName);
                } catch (Exception $e) {
                    echo "error->" . $e->getMessage();
                }
            } else {
                echo "not find the controller " . $ctrlName;
            }
        } catch (Exception $e) {

        }
    }

}