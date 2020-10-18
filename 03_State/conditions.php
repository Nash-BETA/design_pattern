<?php
require_once('デザインパターン\running.php');
require_once('デザインパターン\wait.php');
class conditions{

    public function __construct()
    {
        // デフォルトの状態クラスをセット
        $this->conditions = new wait();
    }

    public function getStatus(){
        return $this->conditions->status();
    }

    //入れ替えを行うメソッド
    public function switch (){
        return $this->conditions = $this->conditions->readClass();
    }
}