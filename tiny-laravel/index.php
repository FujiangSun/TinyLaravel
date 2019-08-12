<?php
require './vendor/autoload.php';
use FuJiangSun\TinyLaravel\Application\Application;
use FuJiangSun\TinyLaravel\Facades\DB;

//echo DB::demo();

 //代码测试
 $app = new Application();
// $res = $app->make('db');
// $result = $res->demo();


//方法的参数可能不一致
// 假设oracle -> mysql
 $app->bind(//laravel绑定的方式
   FuJiangSun\TinyLaravel\Contracts\Databases\DB::class,
   FuJiangSun\TinyLaravel\Databases\Mysql::class
 );

// 契约 -》为了约束我们的服务
 $db = $app->make(FuJiangSun\TinyLaravel\Contracts\Databases\DB::class);
 var_dump($db->demo()) ;
 $res = DB::demo();
 var_dump($res);

// 在一个类中，如果调用某一个类中不存在的方法的时候 那会执行那个魔术
// 如果是静态方式
