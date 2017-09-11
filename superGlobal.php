<!---->
<!--/**-->
<!-- * Created by PhpStorm.-->
<!-- * User: xiaoyu-->
<!-- * Date: 2017/9/6-->
<!-- * Time: 17:00-->
<!-- */-->
<!---->
<!--print_r($_SERVER);-->
<!--//var_dump($_SERVER);-->
<!--print_r($_SERVER['PHP_SELF']);-->


<!DOCTYPE html>
<html>
<body>

<form method="post" action="">
Name: <input type="text" name="fname">
<input type="submit">
</form>

</body>
</html>
<?php
$name = $_REQUEST['fname'];
echo $name;
?>

