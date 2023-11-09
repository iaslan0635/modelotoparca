<?php

namespace App\Facades\N11Client;

class N11HigherOrderClient
{
    public function __construct(private readonly \SoapClient $client, private readonly array $auth)
    {
    }

    public function __call(string $name, $arguments)
    {
        $response = $this->client->$name(array_merge(["auth" => $this->auth], $arguments[0]));
        dump($this->client->__getLastRequest());
        $this->checkResponse($response);
        return $response;
    }

    private function checkResponse($response)
    {
        if ($response->result->status !== "success") {
            throw new \Exception("N11 SOAP response was not succeed\n" . print_r($response, true));
        }
    }
}

