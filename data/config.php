<?php
// database host
define('SERVER_UID',$_SERVER['SERVER_ADDR']);
define('MAIN_NGINX_SERVER','210.51.166.148');
define('MAIN_NGINX_SERVER_INNER','10.10.1.1');
define('CLUSTER_NGINX_SERVER','210.51.166.149');
define('CLUSTER_NGINX_SERVER_INNER','10.10.1.2');

define('TEST_SERVER','61.51.185.242');
define('TEST_SERVER_INNER','192.168.0.198');

define('STAGING_SERVER','10.237.100.38');

if(SERVER_UID==MAIN_NGINX_SERVER||SERVER_UID==MAIN_NGINX_SERVER_INNER){
	//主服务器配置
	$db_host = "210.51.166.148";
	$db_name = "shop";
	$db_user = "yucheng";
	$db_pass = "yucheng";
	$redis_config = array(
		'host' =>  '210.51.166.148',
		'port' =>  6379,
		'password'=>'yuchengmescake'
	);

}else if(SERVER_UID==CLUSTER_NGINX_SERVER||SERVER_UID==CLUSTER_NGINX_SERVER_INNER){
	//从服务器配置
	$db_host = "210.51.166.148";
	$db_name = "shop";
	$db_user = "yucheng";
	$db_pass = "yucheng138";
	$redis_config = array(
		'host' =>  '210.51.166.148',
		'port' =>  6379,
		'password'=>'yuchengmescake'
	);
}else {
	$db_host = "127.0.0.1";
	$db_name = "mescake";
	if(SERVER_UID==TEST_SERVER||SERVER_UID==TEST_SERVER_INNER){
		$db_name = "shop";
	}
	
	$db_user = 'root';
	$db_pass = '';
	$redis_config = array(
		'host' =>  '127.0.0.1',
		'port' =>  6379
	);
}
//require 'Predis/Autoloader.php';

//Predis\Autoloader::register();

//开启一个全局的redis
//$REDIS_CLIENT = new Predis\Client($redis_config);

// table prefix
$prefix    = "ecs_";

$timezone    = "UTC";

$cookie_path    = "/";

$cookie_domain    = "";

$session = "1440";

define('EC_CHARSET','utf-8');

define('ADMIN_PATH','admin');

define('AUTH_KEY', 'this is a key');

define('OLD_AUTH_KEY', '');

define('API_TIME', '2013-12-16 22:10:42');

?>
