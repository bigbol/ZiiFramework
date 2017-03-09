<?php

namespace Pattern;

class Configs{
    protected $path;
    protected $configs;
    public function __construct($param) {
        $this->path = $param;
    }
    
    public function getConfig($key){
        if(empty($this->configs[$key])){
            $file_path = require $this->path.$key.'.php';
            $this->configs[$key] = $file_path;
        }
        return $this->configs[$key];
    } 
    
}
