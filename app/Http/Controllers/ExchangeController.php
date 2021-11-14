<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Trading\AuthServiceClient;
use Trading\CheckSessionRequest;

//define("authGRPCAddress", "172.31.41.146:9008");

class ExchangeController extends Controller
{

    function checkSession(Request $request): bool
    {
        // Check session to GRPC server
        $sessId = $request->session()->get('sessId');
        $sessEmail = $request->session()->get('sessEmail');
        $sessRemoteIPAddress = $request->ip();
        Log::debug($sessId.' -- '.$sessEmail.' -- '.$sessRemoteIPAddress);

        $grpcClient = new AuthServiceClient(authGRPCAddress, ['credentials' => \Grpc\ChannelCredentials::createInsecure(),]);

        $checkSessionRequest = new CheckSessionRequest();
        $checkSessionRequest->setSessionid($sessId);
        $checkSessionRequest->setEmail($sessEmail);
        $checkSessionRequest->setRemoteipaddress($sessRemoteIPAddress);

        list($result, $status) = $grpcClient->CheckSession($checkSessionRequest)->wait();
        $statusCode = $status->code;
        Log::debug(sprintf("status status: %d, result: %v", $statusCode, $result));

        if ($statusCode === 0) {
            $checkSessionStatus = $result->getStatus();
            Log::debug('cSS: '.$checkSessionStatus);

            if ($checkSessionStatus === '000') {
                // OK
                return true;
            } else {
                // NOK, logout
                return false;
            }
        } else {
            // Can't check session
            return false;
        }
    }

    function index(Request $request) {
        $checkSessionResult = $this->checkSession($request);
        Log::debug($checkSessionResult);

        if ($checkSessionResult) {
            return view('livewire.drp_market');
        } else {
            return redirect('/login')->with('message', 'Your account is used to login in other device or invalid session.');
        }
    }
}
