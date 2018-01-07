<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>实现简单的计算器</title>
</head>
<body>
	<?php
	/*
	$_POST[]获取表单method="post"的相应表单元素的值,如$_POST["元素的name值"]
	*/
		if(isset($_POST['submit']) and ($_POST["number1"]!=null) and ($_POST["number2"]!=null) and($_POST["submit"]=="等于"))
		{
			$number3=$_POST["number1"]+$_POST["number2"];

		} else
		{
			$number3=null;
		}
	 ?>
	 <form action="LXi-1_1.php" method="post"><!-- 提交表单数据到php文件 -->
	 	<label>
			<input type="text"  name="number1">+
			<input type="text"  name="number2">
			<input type="submit" value="等于" name="submit">
			<input type="text" id="number3" name="number3" value="<?php echo $number3; ?>">
		</label>
	 </form>
	
</body>
</html>