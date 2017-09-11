<?php
/**
 * Created by PhpStorm.
 * User: xiaoyu
 * Date: 2017/9/6
 * Time: 1:26
 *
 * global 关键字
 * $GLOBALS['index'] 数组
 */
$x=5;
$y=15;

//PHP 在名为 $GLOBALS[index] 的数组中存储了所有的全局变量。下标存有变量名。
//这个数组在函数内也可以访问，并能够用于直接更新全局变量。

//function myTest() {
//    $GLOBALS['y']=$GLOBALS['x']+$GLOBALS['y'];
//}
function myTest() {
    global $x,$y;
    $y+=$x;
}

myTest();
echo $y;