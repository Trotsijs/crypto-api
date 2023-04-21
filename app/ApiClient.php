<?php declare(strict_types=1);

namespace App;

use GuzzleHttp\Client;
use stdClass;

class ApiClient
{
    private Client $client;
    private Api $apiKey;

    public function __construct()
    {
        $this->client = new Client();
        $this->apiKey = new Api();
    }

    public function getReport(): stdClass
    {
        $url = 'https://pro-api.coinmarketcap.com/v1/cryptocurrency/listings/latest?start=1&limit=5&convert=USD';
        $headers = [
            'Accept' => 'application/json',
            'X-CMC_PRO_API_KEY' => $this->apiKey->getApiKey(),
        ];
        $response = $this->client->request('GET', $url, ['headers' => $headers]);

        return json_decode($response->getBody()->getContents());

    }
}