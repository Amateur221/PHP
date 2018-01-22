<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>文件操作</title>
</head>
<body>
	<?php 
		$file=fopen("file.txt","r") or exit("Unable to open");
		while(!feof($file))
		{
			echo fgets($file);
		}
		fclose($file);
		
	 ?>
</body>
</html>