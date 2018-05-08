<?php
/*
define('URL', 'https://'.$_SERVER['HTTP_HOST'].'/');
//define('URL', 'http://'.$_SERVER['HTTP_HOST'].'/');

define('UPLOAD_SIZE', 2097152); // 2MB
define('UPLOAD_DIR', "prison_cms_files");
define('MEMCACHED_HOST', "67.225.142.244");
define('MEMCACHED_PORT', "11211");
*/



define('URL', 'http://'.$_SERVER['HTTP_HOST'].'/nps/');
define('UPLOAD_SIZE', 2097152); // 2MB
define('UPLOAD_DIR', "{$_SERVER['DOCUMENT_ROOT']}/nps/prison_cms_files");
define('MEMCACHED_HOST', "127.0.0.1");
define('MEMCACHED_PORT', "11211");

