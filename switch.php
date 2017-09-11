<?php
/**
 * Created by PhpStorm.
 * User: xiaoyu
 * Date: 2017/9/6
 * Time: 12:05
 */
/*
 * 1.对表达式（通常是变量）进行一次计算
 * 2.把表达式的值与结构中 case 的值进行比较
 * 3.如果存在匹配，则执行与 case 关联的代码
 * 4.代码执行后，break 语句阻止代码跳入下一个 case 中继续执行
 * 5.如果没有 case 为真，则使用 default 语句
 * 6.如果没有 break 语句，从哪里开始执行，就一直执行下去，直到碰到 break
 *
 *
 */
// switch (expression)
//{
//    case label1:
//        code to be executed if expression = label1;
//  break;
//    case label2:
//        code to be executed if expression = label2;
//  break;
//    default:
//        code to be executed
//  if expression is different
//  from both label1 and label2;
//}

$love = 'wuhuarou';
switch ( $love ) {
    case 'douhua':
        echo 'douhua';echo '<br>';
        break;
    case 'binggan':
        echo 'binggan';echo '<br>';
        break;
    case 'wuhuarou':
        echo 'wuhuarou';echo '<br>';
//        break;
    case 'yumi':
        echo 'yumi';echo '<br>';
//        break;
    default:echo 'NO love';
}


