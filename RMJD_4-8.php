<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>可变变量</title>
</head>
<body>
	<?php
	/*
	 *当一个变量名由另一个变量的值决定，
	 *那么当在后者前多加一个$，此变量值将改变为前者
	**/
		$my_name="myname" ;
		$myname="yourname";
		echo $my_name;
		echo "<br>";
		echo $$my_name;
		echo "<hr>";
		echo $myname;
		echo "<br>";
		echo $$myname;//错误，不符合条件。
	 ?>
</body>
</html>