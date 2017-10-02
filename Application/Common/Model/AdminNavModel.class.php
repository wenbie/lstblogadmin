<?php
/**
 * Created by PhpStorm.
 * User: Lin
 * Date: 17/10/2
 * Time: 下午8:24
 */

namespace Common\Model;
use Common\Model\BaseModel;

/**
 * 菜单操作model
 * Class AdminNavModel
 * @package Common\Model
 */
class AdminNavModel extends BaseModel {
    /**
     * 删除数据
     * @param array $map    where语句数组形式
     * @return boolean  操作是否成功
     */
    public function deleteData($map) {
        $count = $this
            ->where(array('pid'=>$map['id']))
            ->count();
        if($count!=0) {
            return false;
        }
        $this->where(array($map))->delete();
        return true;
    }

    /**
     * 获取全部菜单
     * @param string $type tree获取树形结构   level获取层级结构
     * @param string $order
     * @return array    结构数据
     */
    public function getTreeData($type='tree', $order='') {
        //判断是否需要排序
        if(empty($order)) {
            $data=$this->select();
        }else {
            $data = $this->order('order_number is null,'.$order)->select();
        }
        //获取树形或者结构数据
        if($type=='tree') {
            $data = \Org\Nx\Data::tree($data, 'name', 'id', 'pid');
//            var_dump($data);
//            exit;
        }elseif($type=='level') {
            //显示有权限的菜单
            $auth = new \Think\Auth();
//            var_dump($data);
//            exit;
            foreach ($data as $k => $v) {
                if($auth->check($v['mca'],$_SESSION['user']['id'])) {
                    foreach ($v['_data'] as $m => $n) {
                        if(!$auth->check($n['mca'],$_SESSION['user']['id'])) {
                            unset($data[$k]['_data'][$m]);
                        }
                    }
                }else{
                    //删除无权限的菜单
                    unset($data[$k]);
                }
            }
        }
        return $data;
    }
}