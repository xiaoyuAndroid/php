<!DOCTYPE html>

<head lang="en">
<meta charset="UTF-8">
  <title>

  </title>
</head>

<html>
<body>

<?php
echo "我的第一段 PHP 脚本！";
?>
<p>
    静态网页主要有html、CSS、JavaScript
    动态网页技术主要有 JSP、Asp.net、PHP等
</p>

<p>
    网页分为两种静态的、动态的。静态页面内容是不变的，通常扩展名是html，
    这种你浏览器请求的话，服务器就直接传给你了；动态页面的内容是根据条件变化的，可能每个人看到的都不一样，
    动态页面里的代码是服务器处理过后才传给浏览器的。


</p>
<p>
    那么服务器怎么知道这个文件该不该处理之后再传呢，最简单的办法就是用扩展名区分，
    服务器遇见.php的后缀就会先处理再发给浏览器。php页面也可以包括html页面内容，
    如果都是html内容，那么相当于php处理器打开文件看了下，没啥处理的就直接丢给浏览器了，
    对于浏览器看到的效果一样，但服务器上实际有一个处理过程。
</p>
<p>
    如果本机没有运行环境，php文件是运行不了的，直接用ie看会提示下载或其他问题。
    如果想用ie看，那么把扩展名改成.html或者.htm后，直接点击就可以打开，但是其中php代码是不会显示的。
</p>


</body>
</html>