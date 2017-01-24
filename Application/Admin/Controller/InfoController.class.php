<?php
namespace Admin\Controller;
use Think\Controller;
class InfoController extends BaseController {
    
	public function index(){
	   $this->display();		
	}
	
	public function index1(){ 
	   $data =array();
	   $data['total_news'] = M('news')->count();
       $data['total_users'] = M('users')->count();
	   $data['total_emails'] = M('emails')->count();
	   $data['total_emails_undo'] = M('emails')->where('status = 0')->count();
	   $this->assign('data',$data);
	   $this->display();	
	}
}