<?php
/**
 * Created by PhpStorm.
 * User: Lin
 * Date: 17/10/2
 * Time: 下午1:52
 */
namespace Admin\Controller;

use Common\Controller\AdminBaseController;

/**
 * 后台首页控制器
 * Class IndexController
 * @package Admin\Controller
 */
class IndexController extends AdminBaseController {
    /**
     * 首页
     */
    public function index() {
        $this->display();
    }

    /**
     * elements
     */
    public function elements() {
        $this->display();
    }

    /**
     * welcome
     */
    public function welcome() {
        $this->display();
    }
}