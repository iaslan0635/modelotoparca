<?php

namespace App\Facades\N11Client;

class N11HigherOrderClient
{
    public function __construct(private readonly \SoapClient $client, private readonly array $auth)
    {
    }

    public function __call(string $name, $arguments)
    {
        dd($arguments);
        return $this->client->$name(array_merge(["auth" => $this->auth], $arguments));
    }
}
