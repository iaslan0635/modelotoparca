<?php

namespace App\Facades\N11Client;

use Exception;

class N11ClientException extends Exception
{
    public function __construct(public $soapResponse)
    {
        parent::__construct("N11 SOAP response was not succeed\n" . print_r($soapResponse, true));
    }

    public function context(): array
    {
        return ['response' => $this->soapResponse];
    }
}
