<?php
/**
 * Created by PhpStorm.
 * User: xiaoyu
 * Date: 2017/9/6
 * Time: 16:25
 */
/*
 * function functionName(){
 *      被执行的代码;
 *    }
 *
 * 函数名能够以字母或下划线开头（而非数字）。
 * 函数名应该能够反映函数所执行的任务。
 * 页面加载时函数不会立即执行。函数只有在被调用时才会执行。
 *
 */

// 调用没有参数的 setHeight() 函数，它的参数会取默认值
function setHeight($height = 50) {
    echo 'height is '."$height".'<br>';
}
setHeight();
setHeight(100);
setHeight(200);