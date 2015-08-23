<?php


namespace SmartCanvas\Http;

use GuzzleHttp\ClientInterface;
use GuzzleHttp\Client as HttpClient;

trait Client
{
    /**
     * @var ClientInterface
     */
    protected $httpClient;

    /**
     * @return HttpClient
     */
    public function getHttpClient()
    {
        if (is_null($this->httpClient)) {
            $this->httpClient = new HttpClient();
        }

        return $this->httpClient;
    }

}