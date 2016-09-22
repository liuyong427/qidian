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
);
