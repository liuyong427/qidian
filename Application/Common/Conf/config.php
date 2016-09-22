<?php
return array(
	//'配置项'=>'配置值'
	'DEFAULT_MODULE'     => 'Index', //默认模块
    'URL_MODEL'          => '2', //URL模式
    'SESSION_AUTO_START' => true, //是否开启session
	'MODULE_ALLOW_LIST'    =>    array('Index','Admin'),//允许模块
	
	/* 数据库设置 */
	'DB_TYPE'               =>  'mysql',     // 数据库类型
	'DB_HOST'               =>  '127.0.0.1', // 服务器地址
	'DB_NAME'               =>  'qidian',          // 数据库名
	'DB_USER'               =>  'root',      // 用户名
	'DB_PWD'                =>  'root',          // 密码
	'DB_PORT'               =>  '3306',        // 端口
	'DB_CHARSET'            =>  '',      // 数据库编码
	'DB_PREFIX'             =>  'qd_',    // 数据库表前缀
);