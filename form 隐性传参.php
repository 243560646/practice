<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<?php
$name2="wang246";
$password2=78901;


?>
<form action="phpwebinsert.php" method="post" >
	<input type="hidden" name="name2" value="<?php echo $name2; ?>" />
    <input type="hidden" name="password2" value="<?php echo $password2;?>" />
    <input type="submit" value="Go">
</form>
</body>
</html>