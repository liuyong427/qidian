<?php
namespace Admin\Controller;
use Think\Controller;
class ItemsController extends BaseController {
    public function index(){
	    if(empty($_GET)){
			unset($_SESSION['search']);
		}
		if($_POST){
			unset($_SESSION['search']);
		    $where['name'] = array('like',"%".I('post.name')."%");
		}
		if($_SESSION['search']){
			$where = $_SESSION['search'];
		}else{
			$_SESSION['search'] = $where;
		} 
		$User = M('items');
		//$User = M('User'); // 实例化User对象
		$count = $User->count();// 查询满足要求的总记录数

		$Page = new \Think\Page($count,10);// 实例化分页类 传入总记录数和每页显示的记录数(25)
		//$Page->setConfig('header','条记录');
		$Page->setConfig('prev','上一页');
		$Page->setConfig('next','下一页');
		$Page->setConfig('first','第一页');
		$Page->setConfig('last','最后一页');
		$show       = $Page->show();// 分页显示输出
		// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
		//$list = $User->where($where)->limit($Page->firstRow.','.$Page->listRows)->select();
		$list = $this->tree();
        foreach($list as $k=>$v){
			if($v['pid'] == 0){
				$list[$k]['pname'] = '';
				continue;
			}
			$row = M('items')->where("id=".$v['pid'])->find();
			$list[$k]['pname'] = $row['name'];
		} 
		$this->assign('list',$list);// 赋值数据集
		$this->assign('page',$show);// 赋值分页输出
		$this->display(); // 输出模板	
	}
	
	public function edit(){
		$id = $_GET['id']? intval($_GET['id']):'';
		if($id){
			$list = M('items')->where('id='.$id)->find();
			$this->assign('list',$list);
		}
		$lmlist = $this->tree();
		$this->assign('lmlist',$lmlist);
		$this->display();
	}
	
	public function add(){
		$data = $_POST;
		if($_POST['id']){
			unset($data['id']);
			$where['id'] = $_POST['id'];
			if(M('items')->where($where)->save($data)){
				$rdata['status'] =1;
				$rdata['info'] = '修改成功';
			}else{
				$rdata['status'] =-1;
				$rdata['info'] = '修改失败';
			}
		}else{
			if(M('items')->add($data)){
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
		$id = I('get.id');
		if(!$id){
			$this->error('删除失败');
		}
		$num = M('items')->where('pid='.$id)->count();
		if($num>0){
			$this->error('存在下级栏目，不能被删除');
		}
		M('items')->where('id='.$id)->delete();
		$this->redirect('Items/index');
	}
	
	public function tree($pid =0,$num=0){
		$data=array();
		$list = M('items')->where('pid='.$pid)->select();
		//print_R($list);

		foreach($list as $v){
			$v['name'] = str_repeat('&nbsp;&nbsp;',$num).$v['name'];
			$data[]=$v;
			$data=array_merge($data,$this->tree($v['id'],$num+4));
		}
		return $data;
	}
}