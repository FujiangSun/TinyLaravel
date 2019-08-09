<?php

namespace FuJiangSun\TinyLaravel\Application;
use FuJiangSun\TinyLaravel\Container\Container;
use FuJiangSun\TinyLaravel\Contracts\Databases\DB;
use FuJiangSun\TinyLaravel\Databases\Mysql;
use FuJiangSun\TinyLaravel\Databases\Oracle;


class Application   extends Container
{
    public function __construct()
    {
        $this->registerBaseService();
        $this->registerBaseBindings();
    }

    public function registerBaseService()
    {

        $bind = [
            // 标识 => 服务类：
            // MySql::class => 'ShineYork\TinyLaravel\Databases\MySql'
            // 'db'   => Oracle::class,
          'db' => Mysql::class,
           DB::class => Oracle::class,//laravel 是通过契约的形式
        ];
        foreach ($bind as $key => $value) {
            $this->bind($key,$value);
        }
    }
    // 事先绑定这个 程序需要的共享实例
    // 将自身绑定为共享实例
    public function registerBaseBindings()
    {
        $this->instance('app',$this);
        $this->instance(Container::class,$this);
    }

    public function make($abstract,$parameters = [])
    {
        if(!$this->has($abstract)) {
            return $abstract;
        }
        return parent::make($abstract,$parameters);
    }
}