<?php

require(dirname(__FILE__) . '/../src/Player.class.php');
require(dirname(__FILE__) . '/../src/Item.class.php');
require(dirname(__FILE__) . '/../src/Status.class.php');

class AllTest extends PHPUnit_Framework_TestCase
{
    public function testDefault()
    {
        $this->assertTrue(true);
    }

    public function test01_A_STATE()
    {
        $me = new Player();
        $me->setState(Status::POISON);
        $this->assertTrue($me->getState() === Status::POISON);
    }

    public function test02_MULTIPLE_STATE()
    {
        $me = new Player();
        $me->setState($me->getState() | Status::POISON);
        $this->assertTrue($me->getState() === Status::POISON);
        $me->setState($me->getState() | Status::PARALYSIS);
        $this->assertTrue(
            $me->getState() === Status::POISON + Status::PARALYSIS
        );
    }

    public function test03_CURE_POISON()
    {
        $me = new Player();
        $me->setState($me->getState() | Status::POISON);
        $me->setState($me->getState() | Status::PARALYSIS);
        $me->setState($me->getState() | Status::CONFUSION);
        $me->setState($me->getState() ^ Item::DOKUKESHI);
        $this->assertTrue(
            $me->getState() === Status::PARALYSIS + Status::CONFUSION
        );
    }

    public function test04_CURE_WHOLE()
    {
        $me = new Player();
        echo "\n1 ... "; var_dump($me->getState()); echo "\n";
        $me->setState($me->getState() | Status::POISON);
        $me->setState($me->getState() | Status::PARALYSIS);
        $me->setState($me->getState() | Status::CONFUSION);
        echo "\n2 ... "; var_dump($me->getState()); echo "\n";
        $me->setState($me->getState() ^ Item::BANNOUYAKU);
        echo "\n3 ... "; var_dump($me->getState()); echo "\n";
        $this->assertTrue(
            $me->getState() === 0
        );
    }
}
