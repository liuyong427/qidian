<?php
namespace Index\Controller;
use Think\Controller;
class NewsController extends Controller {
	public function index(){
		$id = trim(I('post.id'),'');//item_id
		$id = $id ? $id : 9;
		$list = M('news')->where('item_id='.$id)->order('id desc')->select();
		$this->assign('list',$list);
		$this->display();
	}
	//产品新闻ajax获取
    public function cpnew(){
		$id = I('post.id');
		$list = M('news')->where('id = '.$id)->find();
		if(!$list){
			$data['status'] = 0;
			$data['content'] = '对不起，你查询的内容不存在';
		}else{
			$data = $list;
			$data['status']=1;
			
		}
		$this->ajaxReturn($data);
	}
	
	//详细
	public function content(){
		$id = I('get.id');
		if(!$id){
			R('Empty/_empty');
			exit;
		}
		$list = M('news')->where('id='.$id)->find();
		if(!$list){
			R('Empty/_empty');
			exit;
		}
		$this->assign('list',$list);
		$this->display();
	}
	
}