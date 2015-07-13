<?php

require('./src/player.class.php');

$me = new Player();
$me->setState(Player::STATE_POISON);
var_dump($me->getState(), decbin($me->getState()));
// -> 000010
