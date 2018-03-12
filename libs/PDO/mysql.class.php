<?php
/**
 * mysql 连接类
 * Created by PhpStorm.
 * User: Lanfengye
 * Date: 2016-5-22
 * Time: 22:08
 */
class MySql{
    private $config;
    private $conn;
    function __construct()
    {}

    /**
     * 报错函数
     */
    function err($msg){
        die('对不起，您的操作有误，错误原因为：'.$msg);
    }
    /**
     * 连接数据库
     * @param  string $config 配置数组 array($host,$user,$psw,$dbname,$dbcharset)
     */
    function connect($config){
        extract($config);
        if(!$this->conn=mysqli_connect($host,$user,$psw)){
            $this->err(mysqli_error($this->conn));
        }
        if(!mysqli_select_db($this->conn,$dbname)){
            $this->err(mysqli_error($this->conn));
        }
        mysqli_query($this->conn,"set names "."'{$dbcharset}'");
    }
    /**
     *执行SQL语句
     * @param string $sql
     */
    function query($sql){
        $query=mysqli_query($this->conn,$sql);
        if(!$query){
            $this->err(mysqli_error($this->conn));
        }else{
            return $query;
        }
        mysqli_close($this->conn);
    }

    /**
     *
     * @param $query
     * @return array|string
     */
    function  getAll($data){
        while($rs=mysqli_fetch_array($data,MYSQLI_ASSOC)){
            $list[]=$rs;
        }
        return isset($list)?$list:"";
    }

    /**
     * @param $query
     * @return array|null|string
     */
    function getOne($query){
        $rs=mysqli_fetch_array($query,MYSQLI_ASSOC);
        return isset($rs)?$rs:"";
    }

    /**
     * @param $data
     * @param int $row
     * @param int $field
     * @return string
     */
    function getResult($data,$row=0,$field=0){
        $rs=mysql_result($data,$row,$field);
        return $rs;
    }
}
