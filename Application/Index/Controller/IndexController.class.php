<?php
namespace Index\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
		$cplist = M('items')->where('pid=4')->select();//产品介绍模块
		$cpnews =array();
		foreach($cplist as $k=>$v){
			$arr = M('news')->field('id,title,small_img,item_id')->where('item_id ='.$v['id'])->select();
			$cpnews = array_merge($cpnews,$arr);
		}
		$this->assign('cplist',$cplist);
		$this->assign('cpnews',$cpnews);
        $this->display();   
	}
}