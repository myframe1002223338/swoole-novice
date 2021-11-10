<?php
/**
 * 数据库连接配置
 */
//配置mysql连接用户名
define('DB_USER','root');
//配置mysql连接密码
define('DB_PWD','root');
//配置mysql连接地址,默认127.0.0.1
define('DB_HOST','127.0.0.1');
//配置mysql字符集
define('DB_CHARSET','utf8mb4');
//配置mysql数据库名称
define('DB_NAME','');

//配置是否使用redis,1为使用,0为不使用(默认不使用,使用时如果未开启redis-server会异常导致程序无法执行);
define('REDIS_INCLUDE',0);
//配置redis连接地址,默认127.0.0.1
define('REDIS_HOST','127.0.0.1');
//配置redis端口号,默认6379;
define('REDIS_PORT',6379);
//配置redis连接密码,默认为空;
define('REDIS_AUTH','');
//配置redis数据库名称,默认0;
define('REDIS_DBNAME',0);