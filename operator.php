<?php
/**
 * Created by PhpStorm.
 * User: xiaoyu
 * Date: 2017/9/6
 * Time: 11:44
 */
/*
 * .   串接
 * .=  串接赋值
 *
 */

$a = "Hello";
$b = $a . ' World';
echo $b;
echo "<br>";

$c = 'xiaoyu';
$c .= 'Android';
echo $c;echo '<br>';

/*
 * 数组运算符
 *
 */

$a = array('a'=>'red','b'=>'green');
$b = array('a'=>'green','b'=>'red');

var_dump($a);echo '<br>';
var_dump($b);echo '<br>';echo '<br>';
$c = $a + $b;
// +
// $a与$b的联合
var_dump($c);echo '<br>';echo '<br>';

var_dump($a);echo '<br>';
var_dump($b);echo '<br>';
var_dump($a == $b);echo '<br>';
var_dump($a != $b);echo '<br>';
var_dump($a <> $b);echo '<br>';
var_dump($a === $b);echo '<br>';
var_dump($a !== $b);echo '<br>';










