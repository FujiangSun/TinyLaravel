<?php


namespace FuJiangSun\TinyLaravel\Databases;


use FuJiangSun\TinyLaravel\Contracts\Databases\DB;

class Mysql implements DB
{
    private $type ;

    public function __construct()
    {
        $this->type = 'mysql';
    }
    public function demo()
    {
        return 'mysql 操作的数据库 '.$this->type;
    }
}