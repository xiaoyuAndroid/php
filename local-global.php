<?php
/**
 * Created by PhpStorm.
 * User: xiaoyu
 * Date: 2017/9/6
 * Time: 1:18
 *
 * local
 * global 作用域
 */

header("content-type:text/html; charset=utf-8");
$a = 10;

 function myTest() {
    $b = 20;
    echo '函数内部测试'.'<br>';
//    echo $a;
//    $a 无法输出，函数外定义，global 作用域，在函数内不能用
    echo '$b的值是'.$b.'<br>';
}

myTest();
echo '函数外部测试'.'<br>';
echo '$a的值是'.$a;

//    echo $b;
//    $a 无法输出，函数外定义，global 作用域，在函数内不能用