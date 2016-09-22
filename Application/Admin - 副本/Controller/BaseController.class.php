<?php
namespace Admin\Controller;
use Think\Controller;
class BaseController extends Controller {
    public function __construct(){
		if(!isset($_SESSION['account'] || empty($_SSESSION['account'])){
			R('Login/index');
			return;
		}
	}
}