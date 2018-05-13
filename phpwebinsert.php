<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>

<?php
for ($i=0; $i<6; $i++){                       //  例1    web  插入PHP
?>


	<input type="text"/>
    <br/>


<?php
}
?>
<input type="submit" value="Go"/>               




<?php
$n=$_POST['name2'];                               //例2   接收form传参
$p=$_POST['password2'];
echo $n;
echo "<br/>";
echo $p;


?>


</body>
</html>