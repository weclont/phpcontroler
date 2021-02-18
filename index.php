<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<title>控制端</title>
		</head>
		<body>
		<?php 
			echo "欢迎进入控制页面！<br>";
			echo "以下为设备ID列表信息，请选择一个设备：<br>";
			echo "ID		用户名				计算机名					cpu信息							<br>";
			$path = "./id";
			if(is_dir($path)){
				$dir = scandir($path);
				foreach($dir as $value){
					if($value == "." | $value == ".."){
						continue;
					}
					$array_a = file("./id/".$value);
					foreach($array_a as $cont){
						echo $cont."	";
					}
					echo "<br>";
				}
			}else{
				echo "目录路径错误！";
			}
		?>
		<form name="getinputvalue" method="post" action="input.php" accept-charset="UTF-8">
		<td>请输入对应ID：</td>
		<input type="text" name="id">
		<button type="submit">提交</button>
		<?php
		echo "<br>";
		?>
		<a href="http://pan.fwder.cn/delcache.php" target="_blank" title="delcache1">1pan清除上传缓存</a>
		<a href="http://control.fwder.cn/delcache.php" target="_blank" title="delcache2">2control清除上传缓存</a>
		<a href="/version.php" target="_blank" title="version">查看最新软件版本</a>
                <a href="https://www.fwder.cn/linkhelp/index.php" target="_blank" title="linkhelp">linkhelp连接查询表</a>
                <a href="https://www.fwder.cn/novel/index.php" target="_blank" title="biquge">笔趣阁</a>
		<script type="text/javascript" src="https://v1.cnzz.com/z_stat.php?id=1279646206&web_id=1279646206"></script>
	</body>
</html>