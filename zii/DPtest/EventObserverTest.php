<?php
namespace DPtest;

class EventObserverTest implements \Pattern\EventObserver
{
    function update($event_info = null)
    {
        echo "逻辑1<br />\n";
    }
}

class EventObserverTest2 implements \Pattern\EventObserver
{
    function update($event_info = null)
    {
        echo "逻辑2<br />\n";
    }
}