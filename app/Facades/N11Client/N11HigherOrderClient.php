<?php

namespace App\Facades\N11Client;

class N11HigherOrderClient
{
    public function __construct(private readonly \SoapClient $client, private readonly array $auth)
    {
    }

    public function __call(string $name, $arguments)
    {
        $options = collect(count($arguments) > 1 ? $arguments[1] : []);
        $response = $this->client->$name(array_merge(["auth" => $this->auth], $arguments[0]));
        if ($options->get("throw", true)) $this->checkResponse($response);
        return $response;
    }

    private function checkResponse($response)
    {
        if ($response->result->status !== "success") {
            throw new N11ClientException($response);
        }
    }
}
