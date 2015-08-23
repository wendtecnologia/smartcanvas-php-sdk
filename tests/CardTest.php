<?php

namespace SmartCanvas;

class CardTest extends \PHPUnit_Framework_TestCase
{
    const CLIENT_ID = 'kMRaR35PmKwZRqtEfznNkQUaiitKr0Ij';
    const CLIENT_SECRET = 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJ5WVNyOWlncm1Qa1IiLCJpYXQiOjE0MzgyNjY3OTEsImV4cCI6MTQ2OTgwMzA2Miwic3ViIjoicm9vdEBleGFtcGxlLmNvbSIsInJvb3QiOnRydWUsInRva2VuVHlwZSI6IkFDQ0VTUyIsImVtYWlsIjoicm9vdEBleGFtcGxlLmNvbSJ9.308YvI73sQM3IkCu_iIOQ1h55pAW9nZttG2xOVspdwE';
    const API_HOST = 'https://api.smartcanvas.com/card/v1/cards/    ';
    private $card;

    public function setUp()
    {
        $this->card = new Card(self::API_HOST, self::CLIENT_ID, self::CLIENT_SECRET);
    }

    public function testInstance()
    {
        $this->assertObjectHasAttribute('apiHost', $this->card);
        $this->assertObjectHasAttribute('clientId', $this->card);
        $this->assertObjectHasAttribute('clientSecret', $this->card);
        $this->assertInstanceOf('SmartCanvas\Card', $this->card);
    }

    public function testAttributeValues()
    {
        $this->assertEquals(self::API_HOST, $this->getObjectAttribute($this->card, 'apiHost'));
        $this->assertEquals(self::CLIENT_ID, $this->getObjectAttribute($this->card, 'clientId'));
        $this->assertEquals(self::CLIENT_SECRET, $this->getObjectAttribute($this->card, 'clientSecret'));
    }

    public function testgetHeader()
    {
        $header = [
            'x-client-id' => self::CLIENT_ID,
            'x-access-token' => self::CLIENT_SECRET
        ];
        $this->assertEquals($header, $this->card->getHeader());
    }

}
