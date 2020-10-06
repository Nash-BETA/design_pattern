<?php
//抽象化クラスしたファイルも読み込みが必要
require_once('FortuneTeller.php');
require_once('TopFortuneTeller.php');
require_once('UnderFortuneTeller.php');

//インスタンス化
$TopFortuneTeller = new TopFortuneTeller();
$UnderFortuneTeller = new UnderFortuneTeller();

//抽象クラスのstartConsultationの呼び出し
$TopFortuneTeller->startConsultation();
$UnderFortuneTeller->startConsultation();
