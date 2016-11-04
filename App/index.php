<?php
define('ROOT', __DIR__);
require ROOT.'/ZiiLib/Loader.php';
spl_autoload_register('ZiiLib\Loader::autoload');


$app = new App\Controller\Home\Index();
$app->test();
//App\Controller\Home\Index::test();
