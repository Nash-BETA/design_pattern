<?php
class UnderFortuneTeller extends FortuneTeller {

    public function listening(){
        print('なし');
    }

    public function tuning(){
        print('無言');
    }

    public function suggestion(){
        print('占い結果の報告');
    }

}