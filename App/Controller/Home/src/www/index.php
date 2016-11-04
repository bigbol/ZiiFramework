<?php
/*
 * controller:入口
 * ZB:2016-10-26
 */

namespace App\Controller\Home;

class Index extends Base{
    function get_pro_inc(){
        echo 'this is private static function';
    }
    
     function test(){
        $ob = new Base();
//        self::get_pro_inc();
        echo strlen(5963686);
//        var_dump(gettype(self));
////        $this->get_pro_inc();
//        parent::get_pri_inc();
        parent::get_pub_inc();
    }
    
    
}

class Base{
    protected $pro_inc;
    private   $pri_inc;
    public    $pub_inc;
    
    protected function get_pro_inc(){
        echo 'this is protected function';
    }
    
    private function get_pri_inc(){
        echo 'this is private function';
    }
    
    public function get_pub_inc(){
        echo 'this is pub_inc function';
    }    
    
}
