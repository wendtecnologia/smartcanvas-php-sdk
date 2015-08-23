<?php


namespace SmartCanvas\Http;


class ClientTest extends \PHPUnit_Framework_TestCase
{
    use Client;

    public function testHttpClient()
    {
        $this->objectHasAttribute('httpClient');
        $this->assertNull($this->httpClient);
        $this->assertInstanceOf('GuzzleHttp\Client', $this->getHttpClient());
        $this->assertNotNull($this->httpClient);

    }
}
