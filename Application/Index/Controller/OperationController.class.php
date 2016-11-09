<?php
namespace Index\Controller;
use Think\Controller;
class OperationController extends Controller {
    public function index(){
		$list=M('items')->where('pid=9')->select();
		foreach
        $this->display();   
	}
}