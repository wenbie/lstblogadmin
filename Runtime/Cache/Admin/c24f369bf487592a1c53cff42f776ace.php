<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>管理员后台index</title>
</head>
<body>
<span ><small>欢迎光临,</small> <?php echo ($_SESSION['user']['username']); ?></span>

<ul ><li><a href="<?php echo U('Home/Index/logout');?>">退出</a></li></ul>

    <?php if(is_array($nav_data)): foreach($nav_data as $key=>$v): if(empty($v['_data'])): ?><li >
            <a href="<?php echo U($v['mca']);?>">
                <span ><?php echo ($v['name']); ?></span>
            </a>
            </li>
        <?php else: ?>
             <li >
                <a href="#" >
                    <span class="menu-text"><?php echo ($v['name']); ?></span>
                </a>
                <ul >
                    <?php if(is_array($v['_data'])): foreach($v['_data'] as $key=>$n): ?><li  <?php if((MODULE_NAME.'/'.CONTROLLER_NAME.'/'.ACTION_NAME) == $n['mca']): ?>active<?php endif; ?>"><a href="<?php echo U($n['mca']);?>"><?php echo ($n['name']); ?></a>
                        </li><?php endforeach; endif; ?>
                </ul>
             </li><?php endif; endforeach; endif; ?>

</body>
</html>