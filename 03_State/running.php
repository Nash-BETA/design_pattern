<?php
require_once('デザインパターン\connection.php');
class running implements connection{

    public function status(){
        echo '鑑定中';
    }

    public function readClass(){
        return new wait();
    }
}
