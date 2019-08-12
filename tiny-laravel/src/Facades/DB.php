<?php

// 门面类的父类 -》功能laravel来说
// 快速调用
// 便于维护
namespace FuJiangSun\TinyLaravel\Facades;


class DB extends Facades
{
    // 子类是必须要重写的
    public static function getFacadeClass()
    {
        // return 'db';
        // return new \ShineYork\TinyLaravel\Databases\MySql;
        return   \FuJiangSun\TinyLaravel\Contracts\Databases\DB::class;
    }
}