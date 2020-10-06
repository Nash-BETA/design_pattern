<?php
class TopFortuneTeller extends FortuneTeller {

    public function listening(){
        print('聞き取り');
    }

    public function tuning(){
        print('同調');
    }

    public function suggestion(){
        print('提案');
    }

}