<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>后台管理</title>

    <!-- basic styles -->

    <link href="/Public/statics/ace/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="/Public/statics/ace/css/font-awesome.min.css" />

    <!--[if IE 7]>
    <link rel="stylesheet" href="/Public/statics/ace/css/font-awesome-ie7.min.css" />
    <![endif]-->

    <!-- page specific plugin styles -->

    <!-- fonts -->

    <link rel="stylesheet" href="/Public/statics/ace/css/cyrillic.css" />

    <!-- ace styles -->

    <link rel="stylesheet" href="/Public/statics/ace/css/ace.min.css" />
    <link rel="stylesheet" href="/Public/statics/ace/css/ace-rtl.min.css" />

    <!--[if lte IE 8]>
    <link rel="stylesheet" href="/Public/statics/ace/css/ace-ie.min.css" />
    <![endif]-->

    <!-- inline styles related to this page -->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->

    <!--[if lt IE 9]>
    <script src="/Public/statics/ace/js/html5shiv.js"></script>
    <script src="/Public/statics/ace/js/respond.min.js"></script>
    <![endif]-->
</head>

<body class="login-layout">
<div class="main-container">
    <div class="main-content">
        <div class="row">
            <div class="col-sm-10 col-sm-offset-1">
                <div class="login-container">
                    <div class="center">
                        <h1>
                            <i class="icon-leaf green"></i>
                            <span class="red"></span>
                            <span class="white">个人博客系统</span>
                        </h1>
                        <h4 class="blue">&copy; 吻别博客</h4>
                    </div>

                    <div class="space-6"></div>

                    <div class="position-relative">
                        <div id="login-box" class="login-box visible widget-box no-border">
                            <div class="widget-body">
                                <div class="toolbar clearfix">
                                    <div>
                                        <!--
                                        <a href="#" onclick="show_box('forgot-box'); return false;" class="forgot-password-link">
                                            <i class="icon-arrow-left"></i>
                                            忘记密码？
                                        </a>
                                         -->
                                    </div>

                                    <div>
                                        <!--
                                        <a href="#" onclick="show_box('signup-box'); return false;" class="user-signup-link">
                                            注册
                                            <i class="icon-arrow-right"></i>
                                        </a>
                                         -->
                                    </div>
                                </div>
                                <div class="widget-main">
                                    <h4 class="header blue lighter bigger">
                                        <i class="icon-coffee green"></i>
                                        请输入用户名和密码
                                    </h4>

                                    <div class="space-6"></div>

                                    <form method="post">
                                        <fieldset>
                                            <label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="text" class="form-control" placeholder="用户名" name="username" value="admin"/>
															<i class="icon-user"></i>
														</span>
                                            </label>

                                            <label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="password" class="form-control" placeholder="密码" name="password" value="123456" />
															<i class="icon-lock"></i>
														</span>
                                            </label>

                                            <div class="space"></div>

                                            <div class="clearfix">
                                                <label class="inline">
                                                    <input type="checkbox" style="display:none"/>
                                                    <span class="lbl"> </span>
                                                </label>

                                                <button type="submit" class="width-35 pull-right btn btn-sm btn-primary">
                                                    <i class="icon-key"></i>
                                                    登陆
                                                </button>
                                            </div>

                                            <div class="space-4"></div>
                                        </fieldset>
                                    </form>


                                </div><!-- /widget-main -->

                                <div class="toolbar clearfix">
                                    <div>
                                        <!--
                                        <a href="#" onclick="show_box('forgot-box'); return false;" class="forgot-password-link">
                                            <i class="icon-arrow-left"></i>
                                            忘记密码？
                                        </a>
                                         -->
                                    </div>

                                    <div>
                                        <!--
                                        <a href="#" onclick="show_box('signup-box'); return false;" class="user-signup-link">
                                            注册
                                            <i class="icon-arrow-right"></i>
                                        </a>
                                         -->
                                    </div>
                                </div>
                            </div><!-- /widget-body -->
                        </div><!-- /login-box -->
                    </div><!-- /position-relative -->
                </div>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div>
</div><!-- /.main-container -->

<!-- basic scripts -->

<!--[if !IE]> -->

<script src="/Public/statics/ace/js/jquery-2.0.3.min.js"></script>

<!-- <![endif]-->

<!--[if IE]>
<script src="/Public/statics/ace/js/jquery-1.10.2.min.js"></script>
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

<!-- inline scripts related to this page -->

<script type="text/javascript">
    function show_box(id) {
        jQuery('.widget-box.visible').removeClass('visible');
        jQuery('#'+id).addClass('visible');
    }
</script>
</body>
</html>