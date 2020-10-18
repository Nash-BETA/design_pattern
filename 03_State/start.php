<?php
require_once('デザインパターン\conditions.php');
$conditions = new conditions();
$conditions->getStatus();
$conditions->switch();
$conditions->getStatus();
