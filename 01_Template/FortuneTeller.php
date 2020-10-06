<?php
/**
 * 抽象化クラスのFortuneTeller
 */
abstract class FortuneTeller
{
     public function startConsultation(){
          //挨拶(共通)
          $this->greeting();
          //聞き取り(特有)
          $this->listening();
          //同調(特有)
          $this->tuning();
          //占い(共通)
          $this->forecast();
          //提案(特有)
          $this->suggestion();
     }

     //abstract宣言されたメソッドを、すべて実装しなくてはいけない。
     //なくても動くが書いた場合は継承するclassでは必須になる
     abstract protected function listening();
     abstract protected function tuning();
     abstract protected function suggestion();

     function greeting(){
          print('挨拶');
     }

     function forecast(){
          print('占い');
     }

}
