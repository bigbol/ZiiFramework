<?php

$configs = new Pattern\Configs(BASEDIR.'/configs/');
$conf = $configs->getConfig('db.conf');
var_dump($conf);
exit;