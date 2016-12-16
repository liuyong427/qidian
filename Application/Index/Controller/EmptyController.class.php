<?php
namespace Index\Controller;
use Think\Controller;
class EmptyController extends Controller {
    function  _empty($htmlmsg=''){
		header( " HTTP/1.0  404  Not Found" );
		if(!$htmlmsg){
			$htmlmsg = "<h2>对不起</h2><div>你查找的信息不存在......</div>";
		}
		$this->assign('htmlmsg',$htmlmsg);
		$this->display( 'Index:404' );
	}
}