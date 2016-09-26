<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $this->display('Login/index');	
	}
	public function left(){
		$this->display();
	}
	public function index1(){
		$this->display();
	}
	public function head(){
		$this->display();
	}
}