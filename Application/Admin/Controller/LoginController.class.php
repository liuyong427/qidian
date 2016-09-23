<?php
namespace Admin\Controller;
use Think\Controller;
class LoginController extends Controller {
    public function index(){
        $this->display('index');   
	}
	public function login(){
		$account = trim(I('post.account'));
		$password = trim(I('post.password'));
	
		if(empty($account)){
			$this->ajaxReturn('账号不能为空');
		}
		if(empty($password)){
			$this->ajaxReturn('密码不能为空');
		}
		$data['account'] = $account;
		$data['password'] = md5($password);
		$list = M('users')->where($data)->find();
		if(empty($list)){
			$rs['STATUS'] = 201;
			$rs['MSG']['tips'] = '账号密码不正确'; 
			$this->ajaxReturn($rs);
		}
		$_SESSION['account'] = $list['account'];
		$_SESSION['userid'] = $list['id'];
		$rs['STATUS'] = 0;
		$rs['MSG'] = __ROOT__.'/Admin/Login/loginIn';
		$this->ajaxReturn($rs);
	}
	
	public function loginIn(){
		$this->redirect('Admin/Index/index');
	}
	
	public function loginOut(){
		unset($_SESSION['account']);
		unset($_SESSION['userid']);
		$this->redirect('Login/index');
	}
}