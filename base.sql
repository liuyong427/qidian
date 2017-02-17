create database qidian;
set names utf8;
use qidian;

create table qd_users(
id int(11) primary key auto_increment,
account varchar(30) not null default '',
password varchar(50) not null default '',
name varchar(30) not null default '',
last_login DATETIME,
ip varchar(20) not null default ''
)ENGINE=MyISAM DEFAULT CHARSET=utf8;

insert into qd_users(account,password) values('admin',md5(123456));


create table qd_items(
id int(11) primary key auto_increment,
name varchar(30) not null default '',
pid int(11) not null default 0
)ENGINE=MyISAM DEFAULT CHARSET=utf8;


create table qd_news(
id int(11) primary key auto_increment,
item_id int(11),
title varchar(50) not null default '',
keyword varchar(50) not null default '',
description varchar(300) not null default '',
small_img varchar(150) not null default '',
content text not null default '',
click_num int(11) not null default 0,
add_time datetime,
userid int(11),
key item_id(item_id)
)ENGINE=MyISAM DEFAULT CHARSET=utf8;

create table qd_emails(
id int(11) primary key auto_increment,
name varchar(100) not null default '',
phone varchar(15) not null default '',
email varchar(100) not null default '',
content varchar(2000) not null default '',
add_time datetime,
status int(1) not null default 0
)ENGINE=MyISAM DEFAULT CHARSET=utf8;

