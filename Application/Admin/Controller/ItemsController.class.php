<?php
namespace Admin\Controller;
use Think\Controller;
class ItemsController extends Controller {
    public function index(){
		
		$User = M('users');
		//$User = M('User'); // 实例化User对象
		$count      = $User->count();// 查询满足要求的总记录数

		$Page       = new \Think\Page($count,1);// 实例化分页类 传入总记录数和每页显示的记录数(25)
		$show       = $Page->show();// 分页显示输出
		// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
		$list = $User->limit($Page->firstRow.','.$Page->listRows)->select();
		$this->assign('list',$list);// 赋值数据集
		$this->assign('page',$show);// 赋值分页输出
		var_dump($show);
		$this->display(); // 输出模板	
	}
	
	public function edit(){
		$id = $_GET['id']? intval($_GET['id']):'';
		if($id){
			$list = M('users')->where('id='.$id)->find();
			$this->assign('list',$list);
		}
		$this->display();
	}
	
	public function add(){
		$data = $_POST;
		if($_POST['id']){
			unset($data['id']);
			$where['id'] = $_POST['id'];
			if(M('users')->where($where)->save($data)){
				$this->success('Users/index',1);
			}else{
				//$this->error('Users')
			}
		}else{
			if(M('users')->add($data)){
				$msg = '添加成功';
			}else{
				$msg = '添加失败';
			}
		}
	}
}