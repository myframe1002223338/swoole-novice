<?php
header('Content-type:text/html;charset=utf-8');
date_default_timezone_set('Asia/chongqing');
require_once('src'.DIRECTORY_SEPARATOR.'config'.DIRECTORY_SEPARATOR.'config.php');
require_once('src'.DIRECTORY_SEPARATOR.'config'.DIRECTORY_SEPARATOR.'config_db.php');
@require_once('src'.DIRECTORY_SEPARATOR.'config'.DIRECTORY_SEPARATOR.'config_swoole.php');
use Swoole\Runtime;
if(extension_loaded('swoole')){
    if(php_sapi_name()==='cli'){//只有在CLI模式运行下才执行IO异步非阻塞模式,否则会导致通过WEB服务器运行的客户端报错;
        if(ASYNC_CO==1){//TCP等服务器中不支持协程容器,需要开启该方法自动实现IO异步非阻塞运行;
            Runtime::enableCoroutine();
        }
    }
}

function autoload(){
    require_once('src'.DIRECTORY_SEPARATOR.'Async.php');
    require_once('src'.DIRECTORY_SEPARATOR.'Async_mysql.php');
    require_once('src'.DIRECTORY_SEPARATOR.'Async_redis.php');
    require_once('src'.DIRECTORY_SEPARATOR.'Sync_mysql.php');
    require_once('src'.DIRECTORY_SEPARATOR.'Sync_redis.php');
    require_once('src'.DIRECTORY_SEPARATOR.'Tcp_server.php');
    require_once('src'.DIRECTORY_SEPARATOR.'Tcp_client.php');
    require_once('src'.DIRECTORY_SEPARATOR.'Udp_server.php');
    require_once('src'.DIRECTORY_SEPARATOR.'Udp_client.php');
    require_once('src'.DIRECTORY_SEPARATOR.'Http_server.php');
    require_once('src'.DIRECTORY_SEPARATOR.'Http_client.php');
    require_once('src'.DIRECTORY_SEPARATOR.'Websocket_server.php');
    require_once('src'.DIRECTORY_SEPARATOR.'Rpc_server.php');
    require_once('src'.DIRECTORY_SEPARATOR.'Rpc_client.php');
    require_once('src'.DIRECTORY_SEPARATOR.'Process.php');
    require_once('src'.DIRECTORY_SEPARATOR.'Timer.php');
	require_once('src'.DIRECTORY_SEPARATOR.'Swoole_curl.php');
}
spl_autoload_register('autoload');

