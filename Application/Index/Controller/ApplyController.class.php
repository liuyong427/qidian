<?php
namespace Index\Controller;
use Think\Controller;
class ApplyController extends Controller {
    public function add(){
        $data['name'] = trim(I('post.name'),' ');
		$data['email'] = trim(I('post.email'));
		$data['content'] = trim(I('post.content'));
        $data['add_time'] = date('Y-m-d H:i:s',time());
        $rs = M('emails')->add($data);	
        if($rs){
			$data['status'] = 1;
			$data['msg'] = "提交成功，我们会尽快联系你";
			$this->ajaxReturn($data);
		}else{
			$data['status'] = 0;
			$data['msg'] = "网络错误";
			$this->ajaxReturn($data);
		}		
	}
}