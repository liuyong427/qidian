<?php
namespace Index\Controller;
use Think\Controller;
class EmptyController extends Controller {
    function  _empty(){
		header( " HTTP/1.0  404  Not Found" );
		$this->display( 'Index:404' );
	}
}