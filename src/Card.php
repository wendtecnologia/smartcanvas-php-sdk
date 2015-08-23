<?php


namespace SmartCanvas;


class Card
{
    use Http\Client;

    /**
     * @var string
     */
    protected $apiHost;

    /**
     * @var string
     */
    protected $clientId;

    /**
     * @var string
     */
    protected $clientSecret;

    public function __construct($apiHost, $clientId, $clientSecret)
    {
        $this->apiHost = $apiHost;
        $this->clientId = $clientId;
        $this->clientSecret = $clientSecret;
    }

    public function getHeader()
    {
        return [
            'x-client-id' => $this->clientId,
            'x-access-token' => $this->clientSecret
        ];
    }


}