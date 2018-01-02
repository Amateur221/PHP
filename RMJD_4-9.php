<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>数据类型</title>
</head>
<body>
	<?php
		//布尔型
		$boo=true;
		if ($boo==true) {
		 	echo "Yes,you good";
		 } 
		 echo "<hr>";

		 // 字符串
		 $si="hello,php";
		 echo "$si<br>";//双引号输出变量值
		 echo '$si';//单引号输出，内容是啥输出啥
		 echo "<br>";
		 echo <<< std
		       we are happy,
		       so..............
std;         //结束标记必须另起一行，且前面不能有空格
	 ?>
</body>
</html>