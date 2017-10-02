<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<p>当前状态：<?php echo ($data); ?></p>
<form method="post">
    用户名：<input type="text" name="username" value="admin">
    密码：<input type="text" name="password" value="123456">
    <input type="submit" value="登录">
</form>
<br/>
<a href="<?php echo U('Home/Index/logout');?>">退出登录</a>
</body>
</html>