<?php
//根目录常量
define("SERVER_ROOT", dirname(__FILE__));

//域名常量
define('SITE_ROOT' , 'http://yanli.biyesheji.info');

//引入配置文件
require (SERVER_ROOT . '/Conf/' . 'conf.php');

//引入路由文件
require (SERVER_ROOT . '/Base/' . 'router.php');
