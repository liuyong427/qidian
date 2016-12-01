<?php
namespace Index\Controller;
use Think\Controller;
class OperationController extends Controller {
    public function index(){
		$pid = 1; //知识库总栏目对应的id
		$where['pid'] = $pid;
		$item = '权限管理';
		/*
		if($_GET['item'] && !empty($_GET['item'])){
	        $item = trim(I('get.item'),' ');
            $listitem = M('items')->where('name="'.$item.'"')->find();
            if($listitem){
				$where['item_id'] = $listitem['id'];
			}			
		}*/
		$title = '';
		if($_POST && !empty($_POST['title'])){
			$title = I('post.title');
		}
		$list=M('items')->where($where)->select();
		foreach($list as $k=>$v){
			$list[$k]['news'] = M('news')->field('id,item_id,title')->where('item_id='.$v['id'])->select();
		}
		$this->assign('item',$item);
		$this->assign('title',$title);
		$this->assign('list',$list);
        $this->display();   
	}
	
	public function getContent(){
		$id = I('post.id');
		$data = array();
		if($id){
			$list = M('news')->field('id,title,content,item_id')->where('id='.$id)->find();
            $pname = M('items')->where('id='.$list['item_id'])->find();			
            $list['pname'] = $pname['name'];
			$data['status'] =1;
            $data['msg'] = $list;			
		}else{
			$data['status'] = 0;
			$datqa['msg'] = "对不起，你查询的信息不存在";
		}
		
		$this->ajaxReturn($data);
		
	}
}