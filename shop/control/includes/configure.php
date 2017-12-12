<?php
  define('HTTP_SERVER', 'http://localhost');
  define('HTTPS_SERVER', 'http://localhost');
  define('ENABLE_SSL', false);
  define('HTTP_COOKIE_DOMAIN', '');
  define('HTTPS_COOKIE_DOMAIN', '');
  define('HTTP_COOKIE_PATH', '/restorationhomestead/store/control');
  define('HTTPS_COOKIE_PATH', '/restorationhomestead/store/control');
  define('HTTP_CATALOG_SERVER', 'http://localhost');
  define('HTTPS_CATALOG_SERVER', 'http://localhost');
  define('ENABLE_SSL_CATALOG', 'false');
  define('DIR_FS_DOCUMENT_ROOT', '/var/www/html/restorationhomestead/store/');
  define('DIR_WS_ADMIN', '/restorationhomestead/store/control/');
  define('DIR_WS_HTTPS_ADMIN', '/restorationhomestead/store/control/');
  define('DIR_FS_ADMIN', '/var/www/html/restorationhomestead/store/control/');
  define('DIR_WS_CATALOG', '/restorationhomestead/store/');
  define('DIR_WS_HTTPS_CATALOG', '/restorationhomestead/store/');
  define('DIR_FS_CATALOG', '/var/www/html/restorationhomestead/store/');
  define('DIR_WS_CATALOG_IMAGES', DIR_WS_CATALOG . 'images/');
  define('DIR_WS_CATALOG_LANGUAGES', DIR_WS_CATALOG . 'includes/languages/');
  define('DIR_FS_CATALOG_LANGUAGES', DIR_FS_CATALOG . 'includes/languages/');
  define('DIR_FS_CATALOG_IMAGES', DIR_FS_CATALOG . 'images/');
  define('DIR_FS_CATALOG_MODULES', DIR_FS_CATALOG . 'includes/modules/');
  define('DIR_FS_BACKUP', DIR_FS_ADMIN . 'backups/');
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