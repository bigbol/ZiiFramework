<?php
namespace Pattern;

interface EventObserver{
    function update($event_info = null);
}