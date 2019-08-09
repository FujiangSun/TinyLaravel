<?php

namespace FuJiangSun\TinyLaravel\Facades;

use FuJiangSun\TinyLaravel\Application\Application;

class Facades
{
    protected static $resolvedInstance = [];

    public static function  getFacadeClass()
    {
        throw new \Exception("你没有指定代理的门面类",1);
    }
    public static function createFacade()
    {
        $class = static::getFacadeClass();

        if(is_object($class)) {
            return $class;
        }
        if(isset(static::$resolvedInstance[$class])){
            return static::$resolvedInstance[$class];
        }
        return static::$resolvedInstance[$class] = Application::getInstance()->make($class);

    }
}