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
		 // 结束标记必须另起一行，且前面不能有空格
		 echo <<<std
		 we are happy,
		 so much.
std;
         echo "<hr>";


         // 整型
         $inte1=123456;
         $inte2=01234;
         $inte3=0x66;
         echo $inte1."<br>";
         echo $inte2."<br>";
         echo $inte3;

	 ?>
</body>
</html>