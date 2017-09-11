<?php
/**
 * Created by PhpStorm.
 * User: xiaoyu
 * Date: 2017/9/6
 * Time: 12:25
 */

/*
 * 如果您已经提前确定脚本运行的次数，可以使用 for 循环。
 *
 * foreach 循环只适用于数组，并用于遍历数组中的每个键/值对。
 *
 */
header("content-type:text/html;charset=utf-8");

for ($x=0; $x<=10; $x++) {
    echo "数字是：$x <br>";
}

$color = array("red","green",'blue',"yellow");
var_dump($color);echo "<br>";
print_r($color);echo "<br>";
foreach ( $color as $value ){
    echo $value."<br>";
}