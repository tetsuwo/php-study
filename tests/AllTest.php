<?php

require(dirname(__FILE__) . '/../src/Player.class.php');
require(dirname(__FILE__) . '/../src/Item.class.php');

class AllTest extends PHPUnit_Framework_TestCase
{
    public function testDefault()
    {
        $this->assertTrue(true);
    }

    public function test01_A_STATE()
    {
        $me = new Player();
        $me->setState(Player::STATE_POISON);
        $this->assertTrue($me->getState() === Player::STATE_POISON);
    }

    public function test02_MULTIPLE_STATE()
    {
        $me = new Player();
        $me->setState($me->getState() | Player::STATE_POISON);
        $this->assertTrue($me->getState() === Player::STATE_POISON);

        $me->setState($me->getState() | Player::STATE_PARALYSIS);
        $this->assertTrue(
            $me->getState() === Player::STATE_POISON + Player::STATE_PARALYSIS
        );
    }

    public function test03_CURE_POISON()
    {
        $me = new Player();
        $me->setState($me->getState() | Player::STATE_POISON);

        $me->setState($me->getState() | Player::STATE_PARALYSIS);
        $this->assertTrue(
            $me->getState() === Player::STATE_POISON + Player::STATE_PARALYSIS
        );
    }
}
