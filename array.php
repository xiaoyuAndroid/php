<?php
/**
 * Created by PhpStorm.
 * User: xiaoyu
 * Date: 2017/9/6
 * Time: 16:29
 */
header("content-type:text/html; charset=utf-8");
/*
 * 什么是数组？
 * 数组是特殊的变量，它可以同时保存一个以上的值。
 * 数组能够在单一变量名中存储许多值，并且您能够通过引用下标号来访问某个值。
 *
 * 数组的类型
 *  索引数组 - 带有数字索引的数组
 *      索引是自动分配的（索引从 0 开始）
 *          $cars=array("Volvo","BMW","SAAB");
 *      也可以手动分配索引
 *          $cars[0]="Volvo";
 *          $cars[1]="BMW";
 *          $cars[2]="SAAB";
 *  关联数组 - 带有指定键的数组
 *  多维数组 - 包含一个或多个数组的数组
 */

$cars[0] = "BMW";
$cars[2] = "benchi";
$cars[3] = "aoduio";

var_dump($cars);echo '<br>';
//echo $cars['2'];
//echo $cars['1'];  未定义
//count() 函数用于返回数组的长度（元素数）：
echo count($cars);echo '<br>';

$cars=array("Volvo","BMW","SAAB");
for ($x = 0; $x<count($cars); $x++) {
    echo "第$x 是" ."$cars[$x]".'<br>';
}

$age=array("Bill"=>"35","Steve"=>"37","Peter"=>"43");

foreach($age as $x=>$x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
}
