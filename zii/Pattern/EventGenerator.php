<?php
namespace Pattern;

abstract class EventGenerator{
    protected $observers = array();
    
    function addObserver($observer){
        $this->observers[] = $observer;
    }
    public function notify(){
        foreach($this->observers as $observers){
            $observers->update();
        }
    }
    
}