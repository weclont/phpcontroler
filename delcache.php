<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<title>清除上传缓存</title>
	</head>
	<body>
		<?php
		 //设置需要删除的文件夹
		$path = "./uploads/";
		//清空文件夹函数和清空文件夹后删除空文件夹函数的处理
		function deldir($path){
				//如果是目录则继续
				if(is_dir($path)){
					//扫描一个文件夹内的所有文件夹和文件并返回数组
					$p = scandir($path);
					foreach($p as $val){
						//排除目录中的.和..
						if($val !="." && $val !=".."){
							//如果是目录则递归子目录，继续操作
							if(is_dir($path.$val)){
							//子目录中操作删除文件夹和文件
							deldir($path.$val.'/');
							//目录清空后删除空文件夹
							@rmdir($path.$val.'/');
							}else{
							//如果是文件直接删除
							unlink($path.$val);
							}
						}
					}
				}
			}
			//调用函数，传入路径
			deldir($path);
			echo "清除成功！";
		?>
		<a href="http://pan.fwder.cn/delcache.php" target="_blank" title="1pan">1pan缓存清除</a>
		<a href="/index.php" target="_blank" title="index">返回主页</a>
		<script type="text/javascript" src="https://v1.cnzz.com/z_stat.php?id=1279646206&web_id=1279646206"></script>
	</body>
</html>