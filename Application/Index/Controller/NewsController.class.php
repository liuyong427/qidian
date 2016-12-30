<?php
namespace Index\Controller;
use Think\Controller;
class NewsController extends Controller {
	public function index(){
		$id = trim(I('post.id'),'');//item_id
		$id = $id ? $id : 9;
		$where['item_id'] =$id;
		$User = M('news');
		//$User = M('User'); // 实例化User对象
		$count = $User->where($where)->count();// 查询满足要求的总记录数
		$Page = new \Think\Page($count,5);// 实例化分页类 传入总记录数和每页显示的记录数(25)
		$Page->setConfig('prev','上一页');
		$Page->setConfig('next','下一页');
		$Page->setConfig('first','首页');
		$Page->setConfig('last','尾页');
		$show  = $Page->show();// 分页显示输出
		// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
		$list = $User->where($where)->limit($Page->firstRow.','.$Page->listRows)->select();
		$this->assign('list',$list);// 赋值数据集
		$this->assign('page',$show);// 赋值分页输出
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
		
		$sql= "update ".C('DB_PREFIX')."news set click_num = click_num+1 where id =$id";
		$data['click_num'] =$list['click_num']+1;
		M('news')->where('id='.$id)->save($data);echo M()->getLastSql();
		$this->assign('list',$list);
		$this->display();
	}
	
}