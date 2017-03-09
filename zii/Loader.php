<?php
namespace zii;
class Loader
{
    static function autoload($class)
    {
//        echo $class;exit;
        require BASEDIR.'/'.str_replace('\\', '/', $class).'.php';
    }
}