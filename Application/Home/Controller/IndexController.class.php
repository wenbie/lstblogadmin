<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        if(IS_POST) {
//            var_dump(C('DB_TYPE'));
//            exit;
            //做一个简单的登录， 组合where数组条件
            $map = I('post.');
            $map['password'] = md5($map['password']);
            $data = M('Users')->where($map)->find();
            if( empty($data)) {
                $this->error('账号或密码错误');
            }else {
                $_SESSION['user'] = array(
                    'id' => $data['id'],
                    'username' => $data['username'],
                    'avatar' => $data['avatar']
                );
                $this->success('登录成功，前往管理后台',U('Admin/Index/index'));
            }

        } else {
//            var_dump($_SESSION['user']);
            $data = check_login() ? $_SESSION['user']['username'] . '已登录' : '未登录';
            $assign = array(
                'data' => $data
            );
            $this->assign($assign);
            $this->display();
        }
    }

    /**
     * 退出
     */
    public function logout() {
        session('user',null);
        $this->success('退出成功、前往登录页面',U('Home/Index/index'));
    }
}