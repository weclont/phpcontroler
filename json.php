<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<title>返回数据整理</title>
	</head>
	<body>
		<?php
		if($_GET['id']!=""){
			$_INF = file("./do/".$_GET['id']."-json.txt");
			foreach($_INF as $cont){
				echo $cont."<br>";
			}
			echo "本页面记录了最后一次的返回内容，ID为".$_GET['id'];
		}else{
			echo "请正确输入ID！！";
		}
		?>
		<a href="/index.php" target="_blank" title="return">返回</a>
	</body>
</html>