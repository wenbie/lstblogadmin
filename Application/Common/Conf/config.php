<?php
return array(
//*****************************附加设置***************************************
    'SHOW_PAGE_TRACE'       => false,   //是否显示调试面板
    'LOAD_EXT_CONFIG'       => 'db',
//******************************URL设置****************************************
    'URL_CASE_INSENSITIVE'  => false,   // 默认false 表示URL区分大小写 true则表示不区分大小写
    'MODULE_ALLOW_LIST'     => array('Home','Admin'), //允许访问列表
    'URL_HTML_SUFFIX'       => '',  // URL伪静态后缀设置
    'URL_MODEL'             => 2,       // URL访问模式,可选参数0、1、2、3,代表以下四种模式：
    // 0 (普通模式); 1 (PATHINFO 模式); 2 (REWRITE  模式); 3 (兼容模式)  默认为PATHINFO 模式
//***********************SESSION设置*********************
    'SESSION_OPTIONS'       => array(  // session 配置数组 支持type name id path expire domain 等参数
        'name'              => 'LSTADMIN',//设置session名
        'expire'            => 24*3600*15,//SESSION保存15天
    ),
//***********************************auth设置**********************************
    'AUTH_CONFIG'           => array(
        'AUTH_USER'         =>  'users'         //用户信息表
    ),

);