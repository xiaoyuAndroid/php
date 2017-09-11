<?php
/**
 * Created by PhpStorm.
 * User: xiaoyu
 * Date: 2017/9/6
 * Time: 11:34
 *
 * // 常量的设置
 *
 * 如需设置常量，请使用 define() 函数 - 它使用三个参数
 * 1.首个参数定义常量的名称
 * 2.第二个参数定义常量的值
 * 3.可选的第三个参数规定常量名是否对大小写不敏感。默认是 false（默认对大小写敏感）
 *
 */

define("Greeting","Welcome to xiaoyuAndroid.com");

echo Greeting;
echo '<br>';
//echo greeting;
//Notice: Use of undefined constant greeting - assumed 'greeting' in D:\phpStudy\WWW\php\constant.php on line 21

define("Greeting","Welcome to xiaoyuAndroid",true);

// 第三个参数为 true，常量名对大小写不敏感
echo greeTing;
echo '<br>';
