<?php

namespace SmartCanvas;

class CardTest extends \PHPUnit_Framework_TestCase
{
    private $card;

    public function setUp()
    {
        $this->card = new Card;
    }

    public function testInstance()
    {
        $this->assertInstanceOf('SmartCanvas\Card', $this->card);
    }

}
