<?php


ob_start();
session_start();
define('DOMAIN', 'ecom/admin');
define('TITLE', 'ทดสอบ');
/* * *******Mysql*********** */
define('HOST', 'localhost');
define('USER', 'root');
define('PASS', '');
define('DB', 'db_ecom');
/* * *********************** */
define('ROOT', dirname(__DIR__) . DIRECTORY_SEPARATOR);
define('APP', ROOT . 'app' . DIRECTORY_SEPARATOR);
define('VIEW', ROOT . 'app' . DIRECTORY_SEPARATOR . 'view' . DIRECTORY_SEPARATOR);
define('MODEL', ROOT . 'app' . DIRECTORY_SEPARATOR . 'model' . DIRECTORY_SEPARATOR);
define('CUSTOM', ROOT . 'app' . DIRECTORY_SEPARATOR . 'custom' . DIRECTORY_SEPARATOR);
define('CORE', ROOT . 'app' . DIRECTORY_SEPARATOR . 'core' . DIRECTORY_SEPARATOR);
define('CONTROLLER', ROOT . 'app' . DIRECTORY_SEPARATOR . 'controller' . DIRECTORY_SEPARATOR);
define('JS', ROOT . 'app' . DIRECTORY_SEPARATOR . 'myjs' . DIRECTORY_SEPARATOR);
define('MPDF', ROOT . 'app' . DIRECTORY_SEPARATOR . 'mpdf' . DIRECTORY_SEPARATOR);
/* * **************** ใช้ในการเรียกไฟล์ไม่ถูกว่ามันไปอยู่ไหน ************************* */
define('ROOTS', str_replace("\\", '/', dirname(__FILE__)));
define('PATH', ROOTS == $_SERVER['DOCUMENT_ROOT'] ? '' : substr(ROOTS, strlen($_SERVER['DOCUMENT_ROOT']))
);

$modeules = [ROOT, APP, CORE, CONTROLLER, MODEL];
set_include_path(get_include_path() . PATH_SEPARATOR . implode(PATH_SEPARATOR, $modeules));
spl_autoload_register('spl_autoload', false); //ใช้โหลดไฟล์ที่ต้องใช้ แบบ งง 