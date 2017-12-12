<?php
  define('HTTP_SERVER', 'http://localhost');
  define('HTTPS_SERVER', 'http://localhost');
  define('ENABLE_SSL', false);
  define('HTTP_COOKIE_DOMAIN', '');
  define('HTTPS_COOKIE_DOMAIN', '');
  define('HTTP_COOKIE_PATH', '/restorationhomestead/store/');
  define('HTTPS_COOKIE_PATH', '/restorationhomestead/store/');
  define('DIR_WS_HTTP_CATALOG', '/restorationhomestead/store/');
  define('DIR_WS_HTTPS_CATALOG', '/restorationhomestead/store/');

  define('DIR_FS_CATALOG', '/var/www/html/restorationhomestead/store/');
  define('DIR_FS_DOWNLOAD', DIR_FS_CATALOG . 'download/');
  define('DIR_FS_DOWNLOAD_PUBLIC', DIR_FS_CATALOG . 'pub/');

  define('DB_SERVER', 'localhost');
  define('DB_SERVER_USERNAME', 'root');
  define('DB_SERVER_PASSWORD', 'A00285763a');
  define('DB_DATABASE', 'OSCommerceTest');
  define('USE_PCONNECT', 'false');
  define('STORE_SESSIONS', 'mysql');
  define('CFG_TIME_ZONE', 'America/Chicago');
?>