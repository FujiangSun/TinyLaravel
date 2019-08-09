<?php


namespace FuJiangSun\TinyLaravel\Databases;


use FuJiangSun\TinyLaravel\Contracts\Databases\DB;

class Oracle implements DB
{
    private $type ;

    public function __construct()
    {
        $this->type = 'oracle';
    }
    public function demo()
    {
        return 'oracle 操作的数据库 '.$this->type.' m :';
    }
}