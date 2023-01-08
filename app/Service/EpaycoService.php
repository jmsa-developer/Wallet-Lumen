<?php

namespace App\Service;
use Illuminate\Support\Facades\Log;
use SoapClient;

class EpaycoService
{
    public $client;

    public function __construct() {

        ini_set("soap.wsdl_cache_enabled", "0");

        $wsdl = "http://127.0.0.1:8000/wsdl/client.wsdl";

        try {
            $this->client = new \SoapClient($wsdl);

        }

        catch ( \Exception $e) {
            Log::info('Caught Exception in client'. $e->getMessage());
        }
    }

}
