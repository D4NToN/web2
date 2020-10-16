<?php

//alkalmazás gyökér könyvtára a szerveren
define('SERVER_ROOT', $_SERVER['DOCUMENT_ROOT'].'/');
/*
 * define('SERVER_ROOT', $_SERVER['DOCUMENT_ROOT'].'/web2/');
 */

//URL cím az alkalmazás gyökeréhez
define('SITE_ROOT', 'http://malvinaszepsegkucko.testhosting.hu/');
/*
 * define('SITE_ROOT', 'http://malvinaszepsegkucko.testhosting.hu/web2/');
 */

// a router.php vezérlõ betöltése
require_once(SERVER_ROOT . 'controllers/' . 'router.php');

?>