<?php
namespace Admin\Controller;
use Think\Controller;
class UsersController extends Controller {
    public function index(){
		
		$User = M('users');
		$count      = $User->where($map)->count();// 查询满足要求的总记录数
		$Page       = new \Think\Page($count,25);// 实例化分页类 传入总记录数和每页显示的记录数
		//分页跳转的时候保证查询条件
		foreach($map as $key=>$val) {
			$Page->parameter[$key] = urlencode($val);
		}
		$show       = $Page->show();// 分页显示输出
		$list = $User->where($map)->order('id asc')->page($_GET['p'].',25')->select();
		$this->assign('list',$list);// 赋值数据集
		$this->assign('page',$show);// 赋值分页输出
		print_R($list);
        $this->display();		
	}
}