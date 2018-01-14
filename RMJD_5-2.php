<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>switch应用</title>
	<style>
		.box{
			width: 325px;
			height: 200px;
			/*border:1px solid #aaa;*/
			margin: 0 auto;
			
		}
		.one{
			height: 100px;
			background: url(images/bg_1_01.jpg) no-repeat;
			clear: both;
		}
		.two{
			width: 100px;
			height: 100px;
			background: url(images/bg_1_02.jpg) no-repeat;
			margin-top:-5px;
			float: left;
			clear: both;

		}
		.three{
			width: 225px;
			height: 100px;
			font-family: 微软雅黑;
			text-align: center;
			line-height: 100px;
			background: url(images/bg_1_03.jpg) no-repeat;
			float: left;
			margin-top:-5px;
		}
	</style>
</head>
<body>
	<div class="box">
		<div class="one"></div>
		<div class="two"></div>
		<div class="three">
			<?php
				setlocale(LC_ALL, "chs");//设置本地时间环境
				$weeky=strftime("%A") ;//以“星期几的全称”获取当前为星期几并给变量$weeky。
				switch ($weeky) {
					case "星期一":
						echo  "今天是".iconv("gbk", "utf-8", $weeky)."，愉快的玩耍吧";//iconv()函数将变量$weeky的utf-8的格式转化为gbk的格式
						break;
					case '星期二':
						echo  "今天是".iconv("gbk", "utf-8", $weeky)."，愉快的玩耍吧";
						break;
					case '星期三':
						echo  "今天是".iconv("gbk", "utf-8", $weeky)."，愉快的玩耍吧";
						break;
					case '星期四':
						echo  "今天是".iconv("gbk", "utf-8", $weeky)."，愉快的玩耍吧";
						break;
					case '星期五':
						echo  "今天是".iconv("gbk", "utf-8", $weeky)."，愉快的玩耍吧";
						break;
					case '星期六':
						echo  "今天是".iconv("gbk", "utf-8", $weeky)."，愉快的玩耍吧";
						break;
					default:
						# code...
						echo  "今天是".iconv("gbk", "utf-8", $weeky)."，愉快的玩耍吧";
						break;
				}
			 ?>
		</div>
	</div>
</body>
</html>