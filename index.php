<?php

 /*** error reporting on ***/
 error_reporting(E_ALL);

 /*** define the site path ***/
 $site_path = realpath(dirname(__FILE__));
 define ('__SITE_PATH', $site_path);
 
//define('PUBLIC_PATH',dirname(realpath(__FILE__)) . "/");
//define('BASE_PATH',dirname(PUBLIC_PATH));
//define('ASSETS_PATH',__SITE_PATH . "/assets");
define('ASSETS_PATH',"/mvc-hwredo/assets");
//define('LIB_PATH',BASE_PATH . "/lib/");

 /*** include the init.php file ***/
 include 'includes/init.php';

 /*** load the router ***/
 $registry->router = new router($registry);

 /*** set the controller path ***/
 $registry->router->setPath (__SITE_PATH . '/controller');

 /*** load up the template ***/
 $registry->template = new template($registry);

 /*** load the controller ***/
 $registry->router->loader();

?>
