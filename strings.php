<?php
/**
 * Created by PhpStorm.
 * User: xiaoyu
 * Date: 2017/9/6
 * Time: 1:44
 */

// 一个字母，一个长度；一个汉字，3个长度
echo strlen("Hello World 中国").'<br>';

// 从 0 开始算位置
//strpos() 函数用于检索字符串内指定的字符或文本
//如果找到匹配，则会返回首个匹配的字符位置。如果未找到匹配，则将返回 FALSE

echo strpos("Hello World 中国","国").'<br>';