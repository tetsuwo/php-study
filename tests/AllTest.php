<?php

require(dirname(__FILE__) . '/../src/player.class.php');

class AllTest extends PHPUnit_Framework_TestCase
{
    public function testDefault()
    {
        $this->assertTrue(true);
    }

    public function test01()
    {
        $me = new Player();
        $me->setState(Player::STATE_POISON);
        $this->assertTrue($me->getState() === Player::STATE_POISON);

        $me->setState($me->getState() | Player::STATE_PARALYSIS);
        $this->assertTrue($me->getState() === 18);

    }
}
