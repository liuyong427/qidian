<?php
namespace Admin\Controller;
use Think\Controller;
class BaseController extends Controller {
    public function _initialize(){
		if(!isset($_SESSION['account']) || empty($_SESSION['account'])){
			$this->redirect('Login/index');
		}
	}
}