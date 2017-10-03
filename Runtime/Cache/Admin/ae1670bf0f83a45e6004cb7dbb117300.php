<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>空白页 - Bootstrap后台管理系统模版Ace下载</title>
    <meta name="keywords" content="Bootstrap模版,Bootstrap模版下载,Bootstrap教程,Bootstrap中文" />
    <meta name="description" content="站长素材提供Bootstrap模版,Bootstrap教程,Bootstrap中文翻译等相关Bootstrap插件下载" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- basic styles -->

    <link href="/Public/statics/ace/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="/Public/statics/ace/css/font-awesome.min.css" />

    <!--[if IE 7]>
    <link rel="stylesheet" href="/Public/statics/ace/css/font-awesome-ie7.min.css" />
    <![endif]-->

    <!-- page specific plugin styles -->

    <!-- fonts -->

    <link rel="stylesheet" href="/Public/statics/ace\css\cyrillic.css" />

    <!-- ace styles -->

    <link rel="stylesheet" href="/Public/statics/ace/css/ace.min.css" />
    <link rel="stylesheet" href="/Public/statics/ace/css/ace-rtl.min.css" />
    <link rel="stylesheet" href="/Public/statics/ace/css/ace-skins.min.css" />

    <!--[if lte IE 8]>
    <link rel="stylesheet" href="/Public/statics/ace/css/ace-ie.min.css" />
    <![endif]-->

    <!-- inline styles related to this page -->

    <!-- ace settings handler -->

    <script src="/Public/statics/ace/js/ace-extra.min.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->

    <!--[if lt IE 9]>
    <script src="/Public/statics/ace/js/html5shiv.js"></script>
    <script src="/Public/statics/ace/js/respond.min.js"></script>
    <![endif]-->
</head>

<body>
<div class="navbar navbar-default" id="navbar">
    <script type="text/javascript">
        try{ace.settings.check('navbar' , 'fixed')}catch(e){}
    </script>

    <div class="navbar-container" id="navbar-container">
        <div class="navbar-header pull-left">
            <a href="#" class="navbar-brand">
                <small>
                    <i class="icon-leaf"></i>
                    博客后台
                </small>
            </a><!-- /.brand -->
        </div><!-- /.navbar-header -->

        <div class="navbar-header pull-right" role="navigation">
            <ul class="nav ace-nav">
                <li class="light-blue">
                    <a data-toggle="dropdown" href="#" class="dropdown-toggle">
                        <img class="nav-user-photo" src="/Public/statics/ace/avatars/user.jpg" alt="Jason's Photo" />
                        <span class="user-info">
									<small>Welcome,</small>
									 <?php echo ($_SESSION['user']['username']); ?>
								</span>

                        <i class="icon-caret-down"></i>
                    </a>

                    <ul class="user-menu pull-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
                        <li class="divider"></li>

                        <li>
                            <a href="<?php echo U('Home/Index/logout');?>">
                                <i class="icon-off"></i>
                                退出
                            </a>
                        </li>
                    </ul>
                </li>
            </ul><!-- /.ace-nav -->
        </div><!-- /.navbar-header -->
    </div><!-- /.container -->
</div>

<div class="main-container" id="main-container">
    <script type="text/javascript">
        try{ace.settings.check('main-container' , 'fixed')}catch(e){}
    </script>

    <div class="main-container-inner">
        <a class="menu-toggler" id="menu-toggler" href="#">
            <span class="menu-text"></span>
        </a>

        <div class="sidebar" id="sidebar">
            <script type="text/javascript">
                try{ace.settings.check('sidebar' , 'fixed')}catch(e){}
            </script>

            <div class="sidebar-shortcuts" id="sidebar-shortcuts">
                <div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
                    <button class="btn btn-success">
                        <i class="icon-signal"></i>
                    </button>

                    <button class="btn btn-info">
                        <i class="icon-pencil"></i>
                    </button>

                    <button class="btn btn-warning">
                        <i class="icon-group"></i>
                    </button>

                    <button class="btn btn-danger">
                        <i class="icon-cogs"></i>
                    </button>
                </div>

                <div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
                    <span class="btn btn-success"></span>

                    <span class="btn btn-info"></span>

                    <span class="btn btn-warning"></span>

                    <span class="btn btn-danger"></span>
                </div>
            </div><!-- #sidebar-shortcuts -->

            <ul class="nav nav-list">
                <?php if(is_array($nav_data)): foreach($nav_data as $key=>$v): if(empty($v['_data'])): ?><li >
                            <a href="<?php echo U($v['mca']);?>">
                                <span ><?php echo ($v['name']); ?></span>
                            </a>
                        </li>
                        <?php else: ?>
                        <li >
                            <a href="#" class="dropdown-toggle">
                                <i class="icon-list"></i>
                                <span class="menu-text"><?php echo ($v['name']); ?></span>
                                <b class="arrow icon-angle-down"></b>
                            </a>
                            <ul class="submenu">
                                <?php if(is_array($v['_data'])): foreach($v['_data'] as $key=>$n): ?><li  <?php if((MODULE_NAME.'/'.CONTROLLER_NAME.'/'.ACTION_NAME) == $n['mca']): ?>active<?php endif; ?>"><a href="<?php echo U($n['mca']);?>"><i class="icon-double-angle-right"></i><?php echo ($n['name']); ?></a>
                                    </li><?php endforeach; endif; ?>
                            </ul>
                        </li><?php endif; endforeach; endif; ?>

            </ul><!-- /.nav-list -->

            <div class="sidebar-collapse" id="sidebar-collapse">
                <i class="icon-double-angle-left" data-icon1="icon-double-angle-left" data-icon2="icon-double-angle-right"></i>
            </div>

            <script type="text/javascript">
                try{ace.settings.check('sidebar' , 'collapsed')}catch(e){}
            </script>
        </div>

        <div class="main-content">
            <div class="breadcrumbs" id="breadcrumbs">
                <script type="text/javascript">
                    try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
                </script>

                <ul class="breadcrumb">
                    <li>
                        <i class="icon-home home-icon"></i>
                        <a href="#">系统设置</a>
                    </li>

                    <li>
                        <a href="#">菜单管理</a>
                    </li>
                </ul><!-- .breadcrumb -->

            </div>

            <div class="page-content">
                <div class="row">
                    <div class="col-xs-12">
                        <!-- PAGE CONTENT BEGINS -->

                            <ul id="myTab" class="nav nav-tabs">
                                <li class="active">
                                    <a href="#home" data-toggle="tab">
                                        菜单列表
                                    </a>
                                </li>
                                <li><a href="#addMenu" data-toggle="tab">添加菜单</a></li>

                            </ul>
                            <div id="myTabContent" class="tab-content">
                                <div class="tab-pane fade in active" id="home" >
                                    <form action="<?php echo U('Admin/Nav/order');?>" method="post">
                                        <table class="table table-striped table-hover table-condensed table-bordered" >
                                            <tr><th>排序</th><th>菜单名</th><th>连接</th><th>操作</th></tr>
                                            <?php if(is_array($data)): foreach($data as $key=>$v): ?><tr>
                                                    <td><input type="text" name="<?php echo ($v['id']); ?>" value="<?php echo ($v['order_number']); ?>"/></td>
                                                    <td><?php echo ($v['_name']); ?></td>
                                                    <td><?php echo ($v['mca']); ?></td>
                                                    <td><a href="javascript:;" navId="<?php echo ($v['id']); ?>" onclick="add_child(this)">添加子菜单</a>|<a href="javascript:;" navId="<?php echo ($v['id']); ?>" navName="<?php echo ($v['name']); ?>" navMca="<?php echo ($v['mca']); ?>" navIco="<?php echo ($v['ico']); ?>" onclick="edit(this)" >修改</a>|<a href="javascript:if (confirm('确定删除'))location='<?php echo U('Admin/Nav/delete',array('id'=>$v['id']));?>'">删除</a></td>
                                                </tr><?php endforeach; endif; ?>
                                            <tr><th><input type="submit" value="排序" class="btn btn-primary"/></th><td></td><td></td><td></td></tr>
                                        </table>
                                    </form></div>
                                <div class="tab-pane fade" id="addMenu">
                                    <form class="well form-inline" action="<?php echo U('Admin/Nav/add');?>" method="post">
                                        <input type="hidden" name="pid" value="0">
                                        <table class="table table-striped table-hover table-condensed table-bordered">
                                            <tr><th width="15%">菜单名：</th><td><input type="text" name="name" placeholder="菜单名" class="form-control"/></td></tr>
                                            <tr><th width="15%">连接：</th><td ><input type="text" name="mca" placeholder="模块/控制器/方法" class="form-control"/>例如 Admin/Nav/index</td></tr>
                                            <tr><th width="15%">图标：</th><td><input type="text" name="ico" placeholder="图标名"  class="form-control"  /></td></tr>
                                            <tr><td><input type="submit" value="添加" class="btn btn-primary"/></td><td><button type="button" class="btn btn-default" >关闭</button></td></tr>
                                        </table>
                                    </form>
                                </div>
                            </div>

                        <!-- 添加模态框（Modal） -->
                        <div class="modal fade" id="lst-add" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                        <h4 class="modal-title" id="myModalLabelAdd">添加菜单</h4>
                                    </div>
                                    <div class="modal-body">
                                        <form class="well form-inline" action="<?php echo U('Admin/Nav/add');?>" method="post">
                                            <input type="hidden" name="pid" value="0">
                                            <table class="table table-striped table-hover table-condensed">
                                                <tr><th width="15%">菜单名：</th><td><input type="text" name="name" placeholder="菜单名" class="form-control"/></td></tr>
                                                <tr><th width="15%">连接：</th><td ><input type="text" name="mca" placeholder="模块/控制器/方法" class="form-control"/>例如 Admin/Nav/index</td></tr>
                                                <tr><th width="15%">图标：</th><td><input type="text" name="ico" placeholder="图标名"  class="form-control"  /></td></tr>
                                                <tr><td><input type="submit" value="添加" class="btn btn-primary"/></td><td><button type="button" class="btn btn-default" data-dismiss="modal">关闭</button></td></tr>
                                            </table>
                                        </form>
                                    </div>
                                </div><!-- /.modal-content -->
                            </div><!-- /.modal -->
                        </div>


                        <!-- 修改模态框（Modal） -->
                        <div class="modal fade" id="lst-edit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                        <h4 class="modal-title" id="myModalLabelEdit">修改菜单</h4>
                                    </div>
                                    <div class="modal-body">
                                        <form class="well form-inline" action="<?php echo U('Admin/Nav/edit');?>" method="post">
                                            <input type="hidden" name="id" value="0">
                                            <table class="table table-striped table-hover table-condensed">
                                                <tr><th width="15%">菜单名：</th><td><input type="text" name="name" placeholder="菜单名" class="form-control"/></td></tr>
                                                <tr><th width="15%">连接：</th><td ><input type="text" name="mca" placeholder="模块/控制器/方法" class="form-control"/>例如 Admin/Nav/index</td></tr>
                                                <tr><th width="15%">图标：</th><td><input type="text" name="ico" placeholder="图标名"  class="form-control"  /></td></tr>
                                                <tr><td><input type="submit" value="修改" class="btn btn-primary"/></td><td><button type="button" class="btn btn-default" data-dismiss="modal">关闭</button></td></tr>
                                            </table>
                                        </form>
                                    </div>
                                </div><!-- /.modal-content -->
                            </div><!-- /.modal -->
                        </div>


                        <script >
                            //添加子菜单
                            function add_child(obj) {
                                var navId = $(obj).attr('navId');
//        alert(navId);
                                $("input[name='pid']").val(navId);
                                $("input[name='name']").val('');
                                $("input[name='mca']").val('');
                                $("input[name='ico']").val('');
                                $('#lst-add').modal('show');
                            }

                            //修改菜单
                            function edit(obj) {
                                var navId = $(obj).attr('navId');
                                var navName = $(obj).attr('navName');
                                var navMca = $(obj).attr('navMca');
                                var navIco = $(obj).attr('navIco');

                                $("input[name='id']").val(navId);
                                $("input[name='name']").val(navName);
                                $("input[name='mca']").val(navMca);
                                $("input[name='ico']").val(navIco);
                                $('#lst-edit').modal('show');
                            }

                            //添加菜单
                            function add() {
                                $("input[name='name'],input[name='mca']").val('');
                                $("input[name='pid']").val(0);
                                $('#lst-add').modal('show');
                            }
                        </script>
                        <!-- PAGE CONTENT ENDS -->
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.page-content -->
        </div><!-- /.main-content -->


    </div><!-- /.main-container-inner -->

    <a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
        <i class="icon-double-angle-up icon-only bigger-110"></i>
    </a>
</div><!-- /.main-container -->

<!-- basic scripts -->

<!--[if !IE]> -->

<script src="/Public/statics/ace\js\jquery-2.0.3.min.js"></script>

<!-- <![endif]-->

<!--[if IE]>
<script src="/Public/statics/ace\js\jquery-1.10.2.min.js"></script>
<![endif]-->

<!--[if !IE]> -->

<script type="text/javascript">
    window.jQuery || document.write("<script src='/Public/statics/ace/js/jquery-2.0.3.min.js'>"+"<"+"/script>");
</script>

<!-- <![endif]-->

<!--[if IE]>
<script type="text/javascript">
    window.jQuery || document.write("<script src='/Public/statics/ace/js/jquery-1.10.2.min.js'>"+"<"+"/script>");
</script>
<![endif]-->

<script type="text/javascript">
    if("ontouchend" in document) document.write("<script src='/Public/statics/ace/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
</script>
<script src="/Public/statics/ace/js/bootstrap.min.js"></script>
<script src="/Public/statics/ace/js/typeahead-bs2.min.js"></script>

<!-- page specific plugin scripts -->

<!-- ace scripts -->

<script src="/Public/statics/ace/js/ace-elements.min.js"></script>
<script src="/Public/statics/ace/js/ace.min.js"></script>


</body>
</html>