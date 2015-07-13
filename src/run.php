<?php

require('./player.class.php');

$me = new Player();
$me->setState(Player::STATE_POISON);
var_dump($me->getState());
// -> 000010
