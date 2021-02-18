index.php --相当于input端，可以向服务器发送数据，也可跳入json.php查看返回数据。
json.php --查看返回数据。
output.php --输出input的数据。
return.php --output后return返回数据端。
p2p.php,uploads --用于文件传输。
update,version.php --用于查询是否更新。
json.txt --存储return信息。
message.txt --存储input信息。

--help--  								***三个星号表示未开发***
	[文件系统基本指令]{
		参数a:		参数b属性:
		.createa()  	--创建文件夹 （文件夹名称及路径）***
		.createb()  	--创建文件 （文件名称及路径）***
		.deletea() 		--删除文件夹 （文件夹名称及路径） ***
		.deleteb()  	---删除文件  （文件名称及路径）***
	}
	[系统指令]{
		参数a:		参数b属性:
		.msgbox()  	--信息框 （显示消息/不填为测试消息）
		.url()  		--访问链接 （链接url）
		.shutdown()  	--关机/重启指令 （可选参数：1.shutdown/不填   2.restart）
		.autorun()  	--控制程序开机自启 （可选参数：1.yes  2.no）
		(不可用).upload()  	--上传文件使用的指令，在index.php中不可用 （上传文件名称）
	}
	[bilibili常用指令]{
		.bili()
			参数a:bili
			参数b{	--(留空)	——打开www.bilibili.com
				--(love/like/favlist/favorite)	——打开我的收藏夹
				--(re0)	——打开《Re：从零开始的异世界生活》番剧
				--(ownspace/space)		——打开个人空间125160481
				--(*search<c>) **********************请写时检查message_a的值，避免冲突
					参数c:	--<搜索内容>	——用于b站视频搜索
				--(fanju/anime)	——打开番剧分区
				--(message/xiaoxi)	——打开我的消息（此指令不支持自定义uid号）
				--(av号/BV号)	——打开某一av/BV号
	}
		.changeuid(uid号)	--用于修改uid后修正访问地址
	[疫情消息]{
		.epidemic()
			参数a:epidemic
			参数b{	--(留空)	——查看全国疫情
				--(guizhou)	——查看贵州疫情
	}
	[百度搜索]{
		.baidu(*search<内容>/b可为空)
			参数a:baidu
			参数b{	--(留空)	——打开百度搜索www.baidu.com ******************
				--(search)	——搜索参数 **********************请写时检查message_a的值，避免冲突
			}
			参数c:	--<搜索内容>	——用于百度搜索
	}