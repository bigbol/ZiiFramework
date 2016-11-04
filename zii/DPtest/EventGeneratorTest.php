<?php
namespace DPtest;

class EventGeneratorTest extends \Pattern\EventGenerator{
    function trigger(){
        echo '原始逻辑';
        $this->notify();
    }   
}