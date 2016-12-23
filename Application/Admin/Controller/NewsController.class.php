<?php
namespace Admin\Controller;
use Think\Controller;
class NewsController extends BaseController {
    public function index(){
		if(empty($_GET)){
			unset($_SESSION['search']);
		}
		if($_POST){
			unset($_SESSION['search']);
			if(!empty($_POST['title'])){
				$where['title'] = array('like',"%".$_POST['title']."%");
			}
			if(!empty($_POST['item_id'])){
				$where['item_id'] = $_POST['item_id'];
			}
		}
		if($_SESSION['search']){
			$where = $_SESSION['search'];
		}else{
			$_SESSION['search'] = $where;
		} 
		$User = M('news');
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
		$list = $User->where($where)->limit($Page->firstRow.','.$Page->listRows)->select();
		foreach($list as $k=>$v){
			$item = M('items')->where('id='.$v['item_id'])->find();
			$list[$k]['item_name'] = $item['name'];
		}
		$items = R('Items/tree');
		$this->assign('items',$items);
		$this->assign('list',$list);// 赋值数据集
		$this->assign('page',$show);// 赋值分页输出
		$this->display(); // 输出模板	
	}
	
	public function edit(){
		$id = $_GET['id']? intval($_GET['id']):'';
		if($id){
			$list = M('news')->where('id='.$id)->find();
			$this->assign('list',$list);
		}
		$items = R('Items/tree');
	    $this->assign('items',$items);
		$this->display();
	}
	public function add(){
		$data = $_POST;
		$image = new \Think\Image();
		$img = $data['small_img'];
		if($img){
			$dirname = '/upload/small_img';
			if(!is_dir('./'.$dirname)){
				mkdir('./'.$dirname,0777,true);
			}
			$small_img = $dirname.'/'.basename($img);
			$image->open('./'.$img);
		    $image->thumb(150, 150)->save('./'.$small_img);
		}
		if($img !=$small_img){
			unlink($img);
		}

		$data['small_img'] = $small_img;
		if($_POST['id']){
			unset($data['id']);
			$where['id'] = $_POST['id'];
			if(M('news')->where($where)->save($data)){
				$rdata['status'] =1;
				$rdata['info'] = '修改成功';
			}else{
				$rdata['status'] =-1;
				$rdata['info'] = '修改失败';
			}
		}else{
			$data['userid'] = $_SESSION['userid'];
			$data['add_time'] = date('Y-m-d H:i:s',time());
			if(M('news')->add($data)){
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
		M('news')->where('id='.$id)->delete();
		$this->redirect('News/index');
	}
}