<?php

namespace App\Facades\N11Client;

class N11Client
{
    const SERVICE_ALIASES = [
        'city' => 'CityService',
        'shipmentcompany' => 'ShipmentCompanyService',
        'shipment' => 'ShipmentService',
        'category' => 'CategoryService',
        'product' => 'ProductService',
        'selling' => 'ProductSellingService',
        'stock' => 'ProductStockService',
        'order' => 'OrderService',
        'webhook' => 'WebHookService',
        'claimCancel' => 'ClaimCancelService',
        'return' => 'ReturnService',
        'shipmentCompany' => 'ShipmentCompanyService',
    ];

    private $clients = [];


    public function __construct(
        private readonly string $apiKey,
        private readonly string $apiPassword
    )
    {
    }

    public function __get(string $clientAlias)
    {
        return $this->clients[$clientAlias] ?? ($this->clients[$clientAlias] = $this->createClient($clientAlias));
    }

    private function createClient(string $clientAlias)
    {
        $serviceName = self::SERVICE_ALIASES[$clientAlias];
        $soapClient = new \SoapClient("https://api.n11.com/ws/$serviceName.wsdl", [
            "trace" => 1,
            "exception" => false,
            'cache_wsdl' => WSDL_CACHE_NONE
        ]);

        $auth = ['appKey' => $this->apiKey, 'appSecret' => $this->apiPassword];
        return new N11HigherOrderClient($soapClient, $auth);
    }
}
