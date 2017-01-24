<?php
namespace Index\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
		$cp_item_id = 4;//产品介绍模块id
		$cpnews = M('news')->field('id,title,small_img,item_id')->where('item_id ='.$cp_item_id)->select();
		$this->assign('dxlist',$this->items());
		$this->assign('cpnews',$cpnews);
        $this->display();   
	}
	//获取电销经验子模块
	public function items(){
		$pid = 10;//电销经验模块id
		return  M('items')->where('pid='.$pid)->select();
	}
}