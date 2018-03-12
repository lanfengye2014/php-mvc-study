<?php

/**
 * Created by PhpStorm.
 * User: Lanfengye
 * Date: 2016-5-22
 * Time: 23:35
 */

/**
 * Class DB
 */
class DB
{
    public static $db;

    /**
     * @param $dbtype
     * @param $config
     */
    public static function  init($dbtype,$config){
        self::$db=new $dbtype;
        self::$db->connect($config);
    }

    /**
     * @param $sql
     * @return mixed
     */
    public static function query($sql){
        return self::$db->query($sql);
    }



}