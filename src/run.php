<?php

require(dirname(__FILE__) . '/../src/Player.class.php');
require(dirname(__FILE__) . '/../src/Item.class.php');
require(dirname(__FILE__) . '/../src/Status.class.php');

$me = new Player();
$me->setState(Status::POISON);
var_dump($me->getState(), decbin($me->getState()));
// -> 000010
