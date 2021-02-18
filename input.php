<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<title>输入端</title>
	</head>
	<body>
		<?php 
		echo "欢迎进入控制页面！"; 
		if($_POST['id']!=""){
			echo "当前ID：".$_POST['id'];
		}else{
			echo "请先带ID参数POST访问！";
		}
		?>
		<form name="getinputvalue" method="post" action="input.php" accept-charset="UTF-8">
			<td>请填写输入值：</td>
			<input type="hidden" name="id" value=<?php echo $_POST['id']; ?>>
			<input type="text" name="controlvalue">
			<input name="submit" type="submit" id="submit" value="输入">
			<input name="submit" type="submit" id="submit" value="清空输入内容">
		<?php
		echo "<br>";
		if(isset($_POST["submit"]) && $_POST["submit"]=="输入" && $_POST['id'] != ""){
			$filepath = "./do/".$_POST['id']."-message.txt";
			$fopen = fopen($filepath,'wb') or die('文件不存在');
			fwrite($fopen,$_POST['controlvalue']);
			fclose($fopen);
			echo "输入值为：";
			readfile($filepath);
			echo "成功输入！<br>";
		}else if(isset($_POST["submit"]) && $_POST["submit"]=="清空输入内容"){
			$filepath = "./do/".$_POST['id']."-message.txt";
			$fopen = fopen($filepath,'wb') or die('文件不存在');
			fwrite($fopen,"");
			fclose($fopen);
			echo "已经清空！<br>";
		}
		?>
		<a href=<?php echo "./do/".$_POST['id']."-json.txt"; ?> target="_blank" title="return">查看执行后的返回信息</a>
		<a href=<?php echo "./p2p.php?id=".$_POST['id']; ?> target="_blank" title="p2p">文件远程传输</a>
		<a href="/index.php" target="_blank" title="index">返回</a>
		<script type="text/javascript" src="https://v1.cnzz.com/z_stat.php?id=1279646206&web_id=1279646206"></script>
	</body>
</html>