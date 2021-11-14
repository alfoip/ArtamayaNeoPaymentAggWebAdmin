<?php

use Grpc\ChannelCredentials;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use XXX\AdminCheckSessionRequest;
use XXX\AuthServiceClient;

const authGRPCAddress = "127.0.0.1:9999";

function checkSession(Request $request): bool
{
    // Check session to GRPC server
    $sessId = $request->session()->get('xxxSessId');
    $sessEmail = $request->session()->get('xxxSessEmail');
    $sessRemoteIPAddress = $request->ip();
    Log::debug($sessId.' -- '.$sessEmail.' -- '.$sessRemoteIPAddress);

    $grpcClient = new AuthServiceClient(authGRPCAddress, ['credentials' => ChannelCredentials::createInsecure(),]);

    $checkSessionRequest = new AdminCheckSessionRequest();
    $checkSessionRequest->setSessionid($sessId);
    $checkSessionRequest->setEmail($sessEmail);
    $checkSessionRequest->setRemoteipaddress($sessRemoteIPAddress);

    list($result, $status) = $grpcClient->DoAdminCheckSession($checkSessionRequest)->wait();
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

function convertNilToEmptyString($data) {
    if (!isset($data) || $data == null) {
        return '';
    } else {
        return $data;
    }
}



