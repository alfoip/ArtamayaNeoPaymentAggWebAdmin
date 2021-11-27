<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Http;


use WebUser\WebUserServiceClient;
use WebUser\GRPCCreateWebUserRequest;
use WebUser\GRPCCreateWebUserResponse;
use WebUser\GRPCUpdateWebUserRequest;
use WebUser\GRPCUpdateWebUserResponse;
use WebUser\GRPCUpdateWebUserStatusRequest;
use WebUser\GRPCUpdateWebUserStatusResponse;
use WebUser\GRPCDeleteWebUserRequest;
use WebUser\GRPCDeleteWebUserResponse;


class WebUserController extends Controller
{
    function index(Request $request, $clientid) {

        $sessionOK = checkSession($request);

        if ($sessionOK) {

            $sessEmail = $request->session()->get('xxxSessEmail');
            $sessionId = $request->session()->get('xxxSessId');
            
            $arrJSONWebUser = getWebUserList($request, $clientid);      //  Get Web User List
            $arrJSONPrivilege = getPrivilegeList($request);             //  Get Privilege List

            return view('livewire.clients.client_webuser')
                ->with('menuid', 'webaccess')
                ->with('clientid', $clientid)
                ->with('privilegeList', $arrJSONPrivilege)
                ->with('webUserList', $arrJSONWebUser);
            
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
            
            $grpcClient = new WebUserServiceClient(webuserGRPCAddress, ['credentials' => \Grpc\ChannelCredentials::createInsecure(),]);

            $setGRPCRequest = new GRPCCreateWebUserRequest();
            $setGRPCRequest->setRequestEmail($sessEmail);
            $setGRPCRequest->setRequestSessionid($sessionId);
            $setGRPCRequest->setRequestRemoteipaddress($request->ip());
            $setGRPCRequest->setClientid($request->input('clientid'));
            $setGRPCRequest->setName($request->input('name'));
            $setGRPCRequest->setEmail($request->input('email'));
            $setGRPCRequest->setPrivilege($request->input('privilege'));

            list($result, $status) = $grpcClient->DoGRPCCreateWebUser($setGRPCRequest)->wait();

            $grpcHitStatus = $status->code;
            Log::debug('grpcHitStatusCreate: '.$grpcHitStatus . ' Client ID :'. $clientid);
    
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

    function doUpdate(Request $request) {

        $sessionOK = checkSession($request);

        if ($sessionOK) {

            $sessEmail = $request->session()->get('xxxSessEmail');
            $sessionId = $request->session()->get('xxxSessId');
            
            $grpcClient = new WebUserServiceClient(webuserGRPCAddress, ['credentials' => \Grpc\ChannelCredentials::createInsecure(),]);

            $setGRPCRequest = new GRPCUpdateWebUserRequest();
            $setGRPCRequest->setRequestEmail($sessEmail);
            $setGRPCRequest->setRequestSessionid($sessionId);
            $setGRPCRequest->setRequestRemoteipaddress($request->ip());
            $setGRPCRequest->setId($request->input('id'));
            $setGRPCRequest->setClientid($request->input('clientid'));
            $setGRPCRequest->setName($request->input('name'));
            $setGRPCRequest->setEmail($request->input('email'));
            $setGRPCRequest->setPrivilege($request->input('privilege'));

            list($result, $status) = $grpcClient->DoGRPCUpdateWebUser($setGRPCRequest)->wait();

            $grpcHitStatus = $status->code;
            Log::debug('grpcHitStatus: '.$grpcHitStatus);
    
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
            
            $grpcClient = new WebUserServiceClient(webuserGRPCAddress, ['credentials' => \Grpc\ChannelCredentials::createInsecure(),]);

            $setGRPCRequest = new GRPCUpdateWebUserStatusRequest();
            $setGRPCRequest->setRequestEmail($sessEmail);
            $setGRPCRequest->setRequestSessionid($sessionId);
            $setGRPCRequest->setRequestRemoteipaddress($request->ip());
            $setGRPCRequest->setId($request->input('id'));

            list($result, $status) = $grpcClient->DoGRPCUpdateWebUserStatus($setGRPCRequest)->wait();

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
            
            $grpcClient = new WebUserServiceClient(webuserGRPCAddress, ['credentials' => \Grpc\ChannelCredentials::createInsecure(),]);

            $setGRPCRequest = new GRPCDeleteWebUserRequest();
            $setGRPCRequest->setRequestEmail($sessEmail);
            $setGRPCRequest->setRequestSessionid($sessionId);
            $setGRPCRequest->setRequestRemoteipaddress($request->ip());
            $setGRPCRequest->setCredentialpassword($request->input('credentialpassword'));
            $setGRPCRequest->setId($request->input('id'));

            list($result, $status) = $grpcClient->DoGRPCDeleteWebUser($setGRPCRequest)->wait();

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

        $arrJSONWebUser = getWebUserList($request, $clientid);      //  Get Web User List
        Log::debug('CLIENTID: '.$clientid);

        return view('ajax.webuserlist')
                ->with('clientid', $clientid)
                ->with('webUserList', $arrJSONWebUser);
    }

}
