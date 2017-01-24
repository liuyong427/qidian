<?php
namespace Admin\Controller;
use Think\Controller;
class EmailsController extends BaseController {
    public function index(){
		if(empty($_GET)){
			unset($_SESSION['search']);
		}
		if($_POST){
			unset($_SESSION['search']);
			if($_POST['name']){
				$where['name'] = array('like',"%".$_POST['name']."%");
			}
			if($_POST['stutus']){
				$where['status'] = $_POST['status'];
			}
		}
		if($_SESSION['search']){
			$where = $_SESSION['search'];
		}else{
			$_SESSION['search'] = $where;
		} 
		$User = M('emails');
		//$User = M('User'); // 实例化User对象
		$count = $User->where($where)->count();// 查询满足要求的总记录数
		$Page = new \Think\Page($count,10);// 实例化分页类 传入总记录数和每页显示的记录数(25)
		$Page->setConfig('prev','上一页');
		$Page->setConfig('next','下一页');
		$Page->setConfig('first','首页');
		$Page->setConfig('last','尾页');
		$show  = $Page->show();// 分页显示输出
		// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
		$list = $User->where($where)->limit($Page->firstRow.','.$Page->listRows)->select();
		$this->assign('list',$list);// 赋值数据集
		$this->assign('page',$show);// 赋值分页输出
		$this->display(); // 输出模板	
	}
	
	public function edit(){
		$id = $_GET['id']? intval($_GET['id']):'';
		if($id){
			$list = M('emails')->where('id='.$id)->find();
			$this->assign('list',$list);
		}
		$this->display();
	}
	
	public function add(){
		$data = $_POST;
		if($_POST['id']){
			unset($data['id']);
			$where['id'] = $_POST['id'];
			if(M('emails')->where($where)->save($data)){
				$rdata['status'] =1;
				$rdata['info'] = '修改成功';
			}else{
				$rdata['status'] =-1;
				$rdata['info'] = '修改失败';
			}
		}else{
			if(M('emails')->add($data)){
				$rdata['status'] =1;
				$rdata['info'] = '添加成功';
			}else{
				$rdata['status'] =1;
				$rdata['info'] = '添加失败';
			}
		}
		$this->ajaxReturn($rdata);
	}
	
	public function del(){
		$id = $_GET['id'];
		if(!$id){
			$this->error('删除失败');
		}
		M('emails')->where('id='.$id)->delete();
		$this->redirect('Emails/index');
	}
}