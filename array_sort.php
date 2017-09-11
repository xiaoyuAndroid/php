<?php
/**
 * Created by PhpStorm.
 * User: xiaoyu
 * Date: 2017/9/6
 * Time: 16:46
 */

/*
 *
 * 数组排序
 * sort() - 以升序对数组排序
 * rsort() - 以降序对数组排序
 *      对于字母，按照 ASCII码大小排序
 *
 * asort() - 根据值，以升序对关联数组进行排序
 * arsort() - 根据值，以降序对关联数组进行排序
 *
 * ksort() - 根据键，以升序对关联数组进行排序
 * krsort() - 根据键，以降序对关联数组进行排序
 *
 */

$cars = array("a","B","A");
$numbers = array("20","30","40");
sort($cars);// 返回值为 boolean 型

for ($x = 0; $x<count($cars); $x++) {
    echo "$x is" ." $cars[$x]".'<br>';
}

var_dump(rsort($numbers));echo "<br>";
var_dump(sort($cars));echo "<br>";
var_dump(rsort($numbers));echo "<br>";

$age=array("Bi"=>"35","a"=>"37","A"=>"43");
ksort($age);

foreach($age as $x=>$x_value)
{
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
}