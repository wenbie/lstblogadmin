<?php
/**
 * Created by PhpStorm.
 * User: Lin
 * Date: 17/9/27
 * Time: 下午6:38
 */

header("Content-type:text/html;charset=utf-8");

/**
 * 返回用户id
 * @return integer  用户id
 */
function get_uid() {
    return $_SESSION['user']['id'];
}

/**
 * 检测是否登录
 * @return bool 是否登录
 */
function check_login() {
    if(!empty($_SESSION['user']['id'])) {
        return true;
    }else {
        return false;
    }
}

/**
 * @param integer   $count  总数
 * @param int $limit    $limit    每页数量
 * @return subject      page类
 */
function new_page($count,$limit=10) {
    return new \Org\Nx\Page($count,$limit);
}

/**
 * 获取分页数据
 * @param subject   $model  model对象
 * @param array $map    where条件
 * @param string $order 排序规则
 * @param int $limit    每页数量
 * @return array    分页数据
 */
function get_page_data($model,$map,$order='',$limit=10) {
    $count=$model
        ->where($map)
        ->count();
    $page=new_page($count,$limit);
    // 获取分页数据
    $list = $model
        ->where($map)
        ->order($order)
        ->limit($page->firstRow.','.$page->listRows)
        ->select();
    $data = array(
        'data'=>$list,
        'page'=>$page->show()
    );
    return $data;

}

//设置验证码
function show_verify($config='') {
    if($config=='') {
        $config = array(
            'codeSet'=>'1234567890',
            'fontSize'=>30,
            'useCurve'=>false,
            'imageH'=>60,
            'imageW'=>240,
            'length'=>4,
            'fontttf'=>'4.ttf',
        );
    }
    $verify = new \Think\Verify($config);
    return $verify->entry();
}

//检测验证码
function check_verify($code) {
    $verify = new \Think\Verify();
    return $verify->check($code);
}