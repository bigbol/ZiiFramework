<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

define('BASEDIR', __DIR__);
if(0){
    require BASEDIR.'/Loader.php';
}

spl_autoload_register('\\zii\\Loader::autoload');
//echo '<meta http-equiv="content-type" content="text/html;charset=utf-8">';



//exit;
//测试观察者模式
$ob = new \DPtest\EventGeneratorTest();
$ob->addObserver(new \DPtest\EventObserverTest());
$ob->trigger();