<?php
/**
 * Created by PhpStorm.
 * User: xiaoyu
 * Date: 2017/9/6
 * Time: 11:59
 */

/*
 * elseif
 * else if
 * 两种都可以，w3cshool 上是 elseif
 */
$a = 2;
if ( $a > 20) {
    echo '$a > 20';
}elseif ( $a > 15) {
    echo '$a > 15';
}else {
    echo '$a <= 15';
}

