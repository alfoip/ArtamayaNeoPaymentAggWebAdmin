<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Http;

use UserApi\UserAPIServiceClient;
use UserApi\GRPCCreateUserAPIRequest;
use UserApi\GRPCCreateUserAPIResponse;
use UserApi\GRPCUpdateUserAPIRequest;
use UserApi\GRPCUpdateUserAPIResponse;
use UserApi\GRPCUpdateUserAPIStatusRequest;
use UserApi\GRPCUpdateUserAPIStatusResponse;
use UserApi\GRPCResetUserAPIRequest;
use UserApi\GRPCResetUserAPIResponse;
use UserApi\GRPCDeleteUserAPIRequest;
use UserApi\GRPCDeleteUserAPIResponse;


class UserapiController extends Controller
{
    function index(Request $request, $clientid) {

        $sessionOK = checkSession($request);

        if ($sessionOK) {

            $sessEmail = $request->session()->get('xxxSessEmail');
            $sessionId = $request->session()->get('xxxSessId');
            
            $arrJSONUserAPI = getUserAPIList($request, $clientid);

            return view('livewire.clients.client_api')
                ->with('menuid', 'apiaccess')
                ->with('clientid', $clientid)
                ->with('userapiList', $arrJSONUserAPI);
            
        } else {
                // Session NOK, logout
                return redirect('/login')->with('message', 'Your account is used to login in other device or invalid session.');
        }
    }

    function doUpdate(Request $request) {

        $sessionOK = checkSession($request);

        if ($sessionOK) {

            $sessEmail = $request->session()->get('xxxSessEmail');
            $sessionId = $request->session()->get('xxxSessId');
            
            $grpcClient = new UserAPIServiceClient(userapiGRPCAddress, ['credentials' => \Grpc\ChannelCredentials::createInsecure(),]);

            $setGRPCRequest = new GRPCUpdateUserAPIRequest();
            $setGRPCRequest->setRequestEmail($sessEmail);
            $setGRPCRequest->setRequestSessionid($sessionId);
            $setGRPCRequest->setRequestRemoteipaddress($request->ip());
            $setGRPCRequest->setId($request->input('id'));
            $setGRPCRequest->setClientid($request->input('clientid'));
            $setGRPCRequest->setUsername($request->input('username'));
            $setGRPCRequest->setPassword($request->input('password'));
            $setGRPCRequest->setRemoteipaddress($request->input('remoteipaddress'));
            $setGRPCRequest->setApiaccess($request->input('apiaccess'));

            list($result, $status) = $grpcClient->DoGRPCUpdateUserAPI($setGRPCRequest)->wait();

            $grpcHitStatus = $status->code;
            Log::debug('grpcHitStatusUpdateActive: '.$grpcHitStatus);
    
            if ($grpcHitStatus === 0) {
                $respStatus = $result->getStatus();
            } else {
                $respStatus = 209;
            }

            return response()->json($respStatus);
        } else {
                // Session NOK, logout
                return redirect('/login')->with('message', 'Your account is used to login in other device or invalid session.');
        }
    }

    

    function doUpdateStatus(Request $request) {

        $sessionOK = checkSession($request);

        if ($sessionOK) {

            $sessEmail = $request->session()->get('xxxSessEmail');
            $sessionId = $request->session()->get('xxxSessId');
            
            $grpcClient = new UserAPIServiceClient(userapiGRPCAddress, ['credentials' => \Grpc\ChannelCredentials::createInsecure(),]);

            $setGRPCRequest = new GRPCUpdateUserAPIStatusRequest();
            $setGRPCRequest->setRequestEmail($sessEmail);
            $setGRPCRequest->setRequestSessionid($sessionId);
            $setGRPCRequest->setRequestRemoteipaddress($request->ip());
            $setGRPCRequest->setId($request->input('id'));

            list($result, $status) = $grpcClient->DoGRPCUpdateUserAPIStatus($setGRPCRequest)->wait();

            $grpcHitStatus = $status->code;
            Log::debug('grpcHitStatusUpdateActive: '.$grpcHitStatus);
    
            if ($grpcHitStatus === 0) {
                $respStatus = $result->getStatus();
            } else {
                $respStatus = 209;
            }

            return response()->json($respStatus);
        } else {
                // Session NOK, logout
                return redirect('/login')->with('message', 'Your account is used to login in other device or invalid session.');
        }
    }

    function doReset(Request $request) {

        $sessionOK = checkSession($request);

        if ($sessionOK) {

            $sessEmail = $request->session()->get('xxxSessEmail');
            $sessionId = $request->session()->get('xxxSessId');
            
            $grpcClient = new UserAPIServiceClient(userapiGRPCAddress, ['credentials' => \Grpc\ChannelCredentials::createInsecure(),]);

            $setGRPCRequest = new GRPCResetUserAPIRequest();
            $setGRPCRequest->setRequestEmail($sessEmail);
            $setGRPCRequest->setRequestSessionid($sessionId);
            $setGRPCRequest->setRequestRemoteipaddress($request->ip());
            $setGRPCRequest->setCredentialpassword($request->input('credentialpassword'));
            $setGRPCRequest->setId($request->input('id'));

            list($result, $status) = $grpcClient->DoGRPCResetUserAPI($setGRPCRequest)->wait();

            $grpcHitStatus = $status->code;
            Log::debug('grpcHitReset: '.$grpcHitStatus);

            if ($grpcHitStatus === 0) {
                $arrJSONData = array (
                    'password' => $result->getPassword(),
                    'status' => $result->getStatus(),
                );
                
            } 

            return response()->json($arrJSONData);
        } else {
                // Session NOK, logout
                return redirect('/login')->with('message', 'Your account is used to login in other device or invalid session.');
        }
    }

    


    function doAdd(Request $request) {

        $sessionOK = checkSession($request);

        if ($sessionOK) {

            $sessEmail = $request->session()->get('xxxSessEmail');
            $sessionId = $request->session()->get('xxxSessId');
            $clientid = $request->input('clientid');
            
            $grpcClient = new UserAPIServiceClient(userapiGRPCAddress, ['credentials' => \Grpc\ChannelCredentials::createInsecure(),]);

            $setGRPCRequest = new GRPCCreateUserAPIRequest();
            $setGRPCRequest->setRequestEmail($sessEmail);
            $setGRPCRequest->setRequestSessionid($sessionId);
            $setGRPCRequest->setRequestRemoteipaddress($request->ip());
            $setGRPCRequest->setClientid($request->input('clientid'));
            $setGRPCRequest->setUsername($request->input('username'));
            $setGRPCRequest->setRemoteIPAddress($request->input('remoteipaddress'));
            $setGRPCRequest->setApiaccess($request->input('apiaccess'));


            list($result, $status) = $grpcClient->DoGRPCCreateUserAPI($setGRPCRequest)->wait();

            $grpcHitStatus = $status->code;
            Log::debug('grpcHitStatusCreate: '.$grpcHitStatus . ' Client ID :'. $clientid);
    
            $dataGRPCResponse = 0;
            $arrStatus = [];
    
            if ($grpcHitStatus === 0) {
                $respStatus = $result->getStatus();
                Log::debug('respStatusCreateUserAPI : '.$respStatus);
                if ($respStatus === '000') {

                    $rawDetail = array(
                        'status' => $result->getStatus()
                    );
                    array_push($arrStatus, $rawDetail);
                } else {
                    $dataGRPCResponse = 0;
                    $arrStatus = [];
                }
            } else {
                $dataGRPCResponse = 0;
                $arrStatus = [];
            }


            return response()->json($arrStatus);
        } else {
                // Session NOK, logout
                return redirect('/login')->with('message', 'Your account is used to login in other device or invalid session.');
        }
    }

    
    function doDelete(Request $request) {

        $sessionOK = checkSession($request);

        if ($sessionOK) {

            $sessEmail = $request->session()->get('xxxSessEmail');
            $sessionId = $request->session()->get('xxxSessId');
            
            $grpcClient = new UserAPIServiceClient(userapiGRPCAddress, ['credentials' => \Grpc\ChannelCredentials::createInsecure(),]);

            $setGRPCRequest = new GRPCDeleteUserAPIRequest();
            $setGRPCRequest->setRequestEmail($sessEmail);
            $setGRPCRequest->setRequestSessionid($sessionId);
            $setGRPCRequest->setRequestRemoteipaddress($request->ip());
            $setGRPCRequest->setCredentialpassword($request->input('credentialpassword'));
            $setGRPCRequest->setId($request->input('id'));

            list($result, $status) = $grpcClient->DoGRPCDeleteUserAPI($setGRPCRequest)->wait();

            $grpcHitStatus = $status->code;
            Log::debug('grpcHitDelete: '.$grpcHitStatus);
    
            if ($grpcHitStatus === 0) {
                $respStatus = $result->getStatus();
            } else {
                $respStatus = 209;
            }

            return response()->json($respStatus);
        } else {
                // Session NOK, logout
                return redirect('/login')->with('message', 'Your account is used to login in other device or invalid session.');
        }
    }


    function showdata(Request $request, $clientid) {

        $arrJSONUserAPI = getUserAPIList($request, $clientid);      //  Get User API List

        return view('ajax.userapilist')
                ->with('userapiList', $arrJSONUserAPI);
    }


}
