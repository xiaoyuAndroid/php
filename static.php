<?php
/**
 * Created by PhpStorm.
 * User: xiaoyu
 * Date: 2017/9/6
 * Time: 1:13
 *
 * PHP static 关键词
 */

/*
 *
 * 每当函数被调用时，这个变量所存储的信息都是函数最后一次被调用时所包含的信息。
 * 注意：该变量仍然是函数的局部变量。
 *
 */
function testStatic() {
    static $x = 0;
    echo $x,'<br>';
    $x++;
}

testStatic();
testStatic();
testStatic();
testStatic();
