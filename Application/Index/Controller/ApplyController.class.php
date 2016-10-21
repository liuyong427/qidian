<?php
namespace Index\Controller;
use Think\Controller;
class ApplyController extends Controller {
    public function add(){
        $data['name'] = trim(I('post.name'),' ');
		$data['email'] = trim(I('post.email'));
		$data['content'] = trim(I('post.content'));
        $data['add_time'] = date('Y-m-d H:i:s',time());
        M('emails')->add($data);		
	}
}