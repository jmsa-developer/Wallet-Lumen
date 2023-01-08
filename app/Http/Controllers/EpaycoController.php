<?php

namespace App\Http\Controllers;

use App\Service\EpaycoService;
use Laravel\Lumen\Http\Request;

class EpaycoController extends Controller
{
    public function __construct(EpaycoService $epaycoService)
    {
        $this->epaycoService = $epaycoService;
    }

    public function registro_cliente(Request $request){
        //
        $data = $request->getContent();
        $data = json_decode($data);
        $response = $this->epaycoService->client->registro_cliente($data);
       return response()->json($response);
    }

    public function recarga_billetera(Request $request)
    {
        $data = $request->getContent();
        $data = json_decode($data);
        $response = $this->epaycoService->client->recarga_billetera($data);
        return response()->json($response);

    }

    public function consultar_saldo(Request $request)
    {
        $data = $request->getContent();
        $data = json_decode($data);
        $response = $this->epaycoService->client->consultar_saldo($data);
        return response()->json($response);
    }

    public function pagar(Request $request)
    {
        $data = $request->getContent();
        $data = json_decode($data);
        $response = $this->epaycoService->client->pagar($data);
        return response()->json($response);
    }

    public function confirmar_pago(Request $request)
    {
        $data = $request->getContent();
        $data = json_decode($data);
        $response = $this->epaycoService->client->confirmar_pago($data);
        return response()->json($response);
    }


}
