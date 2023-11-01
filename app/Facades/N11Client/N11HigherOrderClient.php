<?php

namespace App\Facades\N11Client;

class N11HigherOrderClient
{
    public function __construct(private readonly \SoapClient $client, private readonly array $auth)
    {
    }

    public function __call(string $name, $arguments)
    {
        $data = $arguments[0];
        dd($data);
        return $this->client->$name(array_merge(["auth" => $this->auth], $data));
    }
}
