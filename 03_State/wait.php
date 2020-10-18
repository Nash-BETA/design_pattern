<?php
require_once('デザインパターン\connection.php');
class wait implements connection{

    public function status(){
        echo '待機中';
    }

    public function readClass(){
        return new running();
    }
}
