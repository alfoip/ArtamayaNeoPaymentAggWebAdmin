<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Http;

use Client\ClientServiceClient;
use Client\GRPCCreateClientRequest;
use Client\GRPCCreateClientResponse;
use Client\GRPCReadCountryRequest;
use Client\GRPCReadCountryResponse;
use Client\GRPCReadClientRequest;
use Client\GRPCReadClientResponse;
use Client\GRPCUpdateClientRequest;
use Client\GRPCUpdateClientResponse;
use Client\GRPCUpdateClientStatusRequest;
use Client\GRPCUpdateClientStatusResponse;
use Client\GRPCDeleteClientRequest;
use Client\GRPCDeleteClientResponse;




class ClientController extends Controller
{
    function index(Request $request) {

        $sessionOK = checkSession($request);

        if ($sessionOK) {

            $sessEmail = $request->session()->get('xxxSessEmail');
            $sessionId = $request->session()->get('xxxSessId');
            
            $arrJSONCountry = getCountryList($request);         //  Get Country Liet
            $arrJSONClient = getClientList($request, '*');      //  Get Client List
            $arrJSONCurrency = getCurrencyList($request);       //  Get Currency List

            return view('livewire.clients.client')
                ->with('countryList', $arrJSONCountry)
                ->with('currencyList', $arrJSONCurrency)
                ->with('clientList', $arrJSONClient);
            
        } else {
                // Session NOK, logout
                return redirect('/login')->with('message', 'Your account is used to login in other device or invalid session.');
        }
    }

    function clientdetail(Request $request, $clientid) {

        $sessionOK = checkSession($request);

        if ($sessionOK) {

            $sessEmail = $request->session()->get('xxxSessEmail');
            $sessionId = $request->session()->get('xxxSessId');
            
            $arrJSONClient = getClientList($request, $clientid);        //  Get Single Client List
            $arrJSONUserAPI = getUserAPIList($request, $clientid);      //  Get User API List
            $arrJSONWebUser = getWebUserList($request, $clientid);      //  Get Web User List

            return view('livewire.clients.client_detail')
                ->with('menuid', 'detail')
                ->with('clientid', $clientid)
                ->with('userapiList', $arrJSONUserAPI)
                ->with('webuserList', $arrJSONWebUser)
                ->with('clientList', $arrJSONClient);
            
        } else {
                // Session NOK, logout
                return redirect('/login')->with('message', 'Your account is used to login in other device or invalid session.');
        }
    }

    function doAdd(Request $request) {
        // // Get incoming request data
        // $remoteIPAddress = $request->ip();
        // $clientname = convertNilToEmptyString($request->input('clientname'));
        // $clientaddress = convertNilToEmptyString($request->input('clientaddress'));
        // $clientregion = convertNilToEmptyString($request->input('clientregion'));
        // $clientcountryid = convertNilToEmptyString($request->input('clientcountryid'));
        // $clientcurrency = convertNilToEmptyString($request->input('clientcurrency'));
        // $clientphone = convertNilToEmptyString($request->input('clientphone'));
        // $clientemail = convertNilToEmptyString($request->input('clientemail'));
        // $picname = convertNilToEmptyString($request->input('picname'));
        // $picphone = convertNilToEmptyString($request->input('picphone'));
        // $picemail = convertNilToEmptyString($request->input('picemail'));
        
        $sessionOK = checkSession($request);

        if ($sessionOK) {

            // Session data
            $sessEmail = $request->session()->get('xxxSessEmail');
            $sessionId = $request->session()->get('xxxSessId');

            $grpcClient = new ClientServiceClient(clientGRPCAddress, ['credentials' => \Grpc\ChannelCredentials::createInsecure(),]);

            $setGRPCRequest = new GRPCCreateClientRequest();
            $setGRPCRequest->setRequestEmail($sessEmail);
            $setGRPCRequest->setRequestsessionid($sessionId);
            $setGRPCRequest->setRequestremoteipaddress($request->ip());
            $setGRPCRequest->setClientname($request->input('clientname'));
            $setGRPCRequest->setClientaddress($request->input('clientaddress'));
            $setGRPCRequest->setClientregion($request->input('clientregion'));
            $setGRPCRequest->setClientcountryid($request->input('clientcountryid'));
            $setGRPCRequest->setClientcurrency($request->input('clientcurrency'));
            $setGRPCRequest->setClientphone($request->input('clientphone'));
            $setGRPCRequest->setClientemail($request->input('clientemail'));
            $setGRPCRequest->setPicname($request->input('picname'));
            $setGRPCRequest->setPicphone($request->input('picphone'));
            $setGRPCRequest->setPicemail($request->input('picemail'));

            list($result, $status) = $grpcClient->DoGRPCCreateClient($setGRPCRequest)->wait();

            $grpcHitStatus = $status->code;
            Log::debug('grpcHitStatusDIsini: '.$grpcHitStatus);

            $dataGRPCResponse = 0;
            $arrStatus = [];
    
            if ($grpcHitStatus === 0) {
                $respStatus = $result->getStatus();
                Log::debug('respStatusUpdateClientStatus : '.$respStatus);
                if ($grpcHitStatus === 0) {
                    $respStatus = $result->getStatus();
                } else {
                    $respStatus = 209;
                }
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
            
            $grpcClient = new ClientServiceClient(clientGRPCAddress, ['credentials' => \Grpc\ChannelCredentials::createInsecure(),]);

            $setGRPCRequest = new GRPCUpdateClientStatusRequest();
            $setGRPCRequest->setRequestEmail($sessEmail);
            $setGRPCRequest->setRequestSessionid($sessionId);
            $setGRPCRequest->setRequestRemoteipaddress($request->ip());
            $setGRPCRequest->setClientid($request->input('clientid'));

            list($result, $status) = $grpcClient->DoGRPCUpdateClientStatus($setGRPCRequest)->wait();

            $grpcHitStatus = $status->code;
            Log::debug('grpcHitStatusUpdateClientStatus: '.$grpcHitStatus);
    
            $dataGRPCResponse = 0;
            $arrStatus = [];
    
            if ($grpcHitStatus === 0) {
                $respStatus = $result->getStatus();
                Log::debug('respStatusUpdateClientStatus : '.$respStatus);
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


    function doLoadData(Request $request) {

        $sessionOK = checkSession($request);

        if ($sessionOK) {

            $sessEmail = $request->session()->get('xxxSessEmail');
            $sessionId = $request->session()->get('xxxSessId');
        
            $grpcClient = new ClientServiceClient(clientGRPCAddress, ['credentials' => \Grpc\ChannelCredentials::createInsecure(),]);

            $setGRPCRequest = new GRPCReadClientRequest();
            $setGRPCRequest->setRequestEmail($sessEmail);
            $setGRPCRequest->setRequestSessionid($sessionId);
            $setGRPCRequest->setRequestRemoteipaddress($request->ip());
            $setGRPCRequest->setClientid($request->input('clientid'));
            Log::debug('CLIENTID ====> '.$request->input('clientid'));

            $dataClientList = 0;
            $arrJSONData = [];

            list($result, $status) = $grpcClient->DoGRPCReadClient($setGRPCRequest)->wait();

            $grpcHitStatus = $status->code;
            Log::debug('grpcHitStatus: '.$grpcHitStatus);

            if ($grpcHitStatus === 0) {
                $respStatus = $result->getStatus();
                Log::debug('respStatus: '.$respStatus);
        
                if ($respStatus === '000') {
                    $dataClientList = $result->getClientlist();
        
                    foreach ($dataClientList as $clientList) {
                        $rawDetail = array (
                            'clientid' => $clientList->getClientid(),
                            'clientname' => $clientList->getClientname(),
                            'clientaddress' => $clientList->getClientaddress(),
                            'clientregion' => $clientList->getClientregion(),
                            'clientcountryname' => $clientList->getClientcountryname(),
                            'clientemail' => $clientList->getClientemail(),
                            'clientphone' => $clientList->getClientphone(),
                            'clientcurrency' => $clientList->getClientcurrency(),
                            'picname' => $clientList->getPicname(),
                            'picemail' => $clientList->getPicemail(),
                            'picphone' => $clientList->getPicphone(),
                            'isactive' => $clientList->getIsactive(),
                            'createdate' => $clientList->getCreatedate(),
                        );
                        array_push($arrJSONData, $rawDetail);
                    }
                } else {
                    $dataClientList = 0;
                    $arrJSONData = [];
                }
            } else {
                $dataClientList = 0;
                $arrJSONData = [];
            }

            return json_encode($arrJSONData);
         
        }
    }

    function doUpdate(Request $request) {

        $sessionOK = checkSession($request);

        if ($sessionOK) {

            $sessEmail = $request->session()->get('xxxSessEmail');
            $sessionId = $request->session()->get('xxxSessId');
            
            $grpcClient = new ClientServiceClient(clientGRPCAddress, ['credentials' => \Grpc\ChannelCredentials::createInsecure(),]);

            $setGRPCRequest = new GRPCUpdateClientRequest();
            $setGRPCRequest->setRequestEmail($sessEmail);
            $setGRPCRequest->setRequestSessionid($sessionId);
            $setGRPCRequest->setRequestRemoteipaddress($request->ip());

            $setGRPCRequest->setClientid($request->input('clientid'));
            $setGRPCRequest->setClientname($request->input('clientname'));
            $setGRPCRequest->setClientaddress($request->input('clientaddress'));
            $setGRPCRequest->setClientregion($request->input('clientregion'));
            $setGRPCRequest->setClientcountryid($request->input('clientcountryname'));
            $setGRPCRequest->setClientcurrency($request->input('clientcurrency'));
            $setGRPCRequest->setClientphone($request->input('clientphone'));
            $setGRPCRequest->setClientemail($request->input('clientemail'));
            $setGRPCRequest->setPicname($request->input('picname'));
            $setGRPCRequest->setPicphone($request->input('picphone'));
            $setGRPCRequest->setPicemail($request->input('picemail'));

            list($result, $status) = $grpcClient->DoGRPCUpdateClient($setGRPCRequest)->wait();

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

    
    function doDelete(Request $request) {

        $sessionOK = checkSession($request);

        if ($sessionOK) {

            $sessEmail = $request->session()->get('xxxSessEmail');
            $sessionId = $request->session()->get('xxxSessId');
            
            $grpcClient = new ClientServiceClient(clientGRPCAddress, ['credentials' => \Grpc\ChannelCredentials::createInsecure(),]);

            $setGRPCRequest = new GRPCDeleteClientRequest();
            $setGRPCRequest->setRequestEmail($sessEmail);
            $setGRPCRequest->setRequestSessionid($sessionId);
            $setGRPCRequest->setRequestRemoteipaddress($request->ip());
            $setGRPCRequest->setCredentialpassword($request->input('credentialpassword'));
            $setGRPCRequest->setClientid($request->input('clientid'));

            list($result, $status) = $grpcClient->DoGRPCDeleteClient($setGRPCRequest)->wait();

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

    
    function showdata(Request $request) {

        $arrJSONClient = getClientList($request, '*');      //  Get User API List

        return view('ajax.clientlist')
                ->with('clientList', $arrJSONClient);
    }

}
