<?php
namespace Admin\Controller;
use Think\Controller;
class BaseController extends Controller {
    public function __initialize(){
		if(!isset($_SESSION['account']) || empty($_SSESSION['account'])){
			R('Login/index');
			exit;
		}
		echo 111;
	}
}