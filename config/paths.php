<?php
//$_SERVER['DOCUMENT_ROOT'];exit;
define('URL', 'http://'.$_SERVER['HTTP_HOST'].'/nps/');
//define('URL', 'https://'.$_SERVER['HTTP_HOST'].'/');
define('UPLOAD_SIZE', 2097152); // 2MB
define('UPLOAD_DIR', "{$_SERVER['DOCUMENT_ROOT']}/nps/prison_cms_files");
define('MEMCACHED_HOST', "127.0.0.1");
define('MEMCACHED_PORT', "11211");
