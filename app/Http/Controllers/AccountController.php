<?php

namespace App\Http\Controllers;

use Grpc\ChannelCredentials;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Ramsey\Uuid\Uuid;
use Xxx\klponCreateAccountRequest;
use Xxx\klpOnServiceClient;
use Xxx\XXXAccountServiceClient;
use Xxx\XXXDelAccountRequest;
use Xxx\XXXEditAccountRequest;
use Xxx\XXXGetDetailAccountRequest;
use Xxx\XXXNewAccountRequest;
use Xxx\XXXTableRequest;
use Xxx\XXXGetCountryListRequest;
use Xxx\XXXToolsServiceClient;

class AccountController extends Controller
{
    function index(Request $request) {
        // Check session
        $sessionOK = checkSession($request);

        if ($sessionOK) {
            // Session data
            $sessEmail = $request->session()->get('xxxSessEmail');
            $sessionId = $request->session()->get('xxxSessId');

            // get country list
            $grpcClient = new XXXToolsServiceClient(authGRPCAddress, ['credentials' => ChannelCredentials::createInsecure(),]);

            $xxxCountryListRequest = new XXXGetCountryListRequest();
            $xxxCountryListRequest->setUseremail($sessEmail);
            $xxxCountryListRequest->setSessionid($sessionId);

            list($result, $status) = $grpcClient->GetCountryLIst($xxxCountryListRequest)->wait();

            $grpcHitStatus = $status->code;
            Log::debug('grpcHitStatus: '.$grpcHitStatus);

            if ($grpcHitStatus === 0) {
                $respStatus = $result->getStatus();
                Log::debug('respStatus: '.$respStatus);

                $arrCountryListData = [];
                if ($respStatus === '000') {
                    $arrCountryList = $result->getCountrylist();

                    foreach ($arrCountryList as $countryList) {
                        $countryListDetail = array(
                            'countryISO' => $countryList->getCountryiso3(),
                            'countryName' => $countryList->getCountryname()
                        );

                        array_push($arrCountryListData, $countryListDetail);
                    }
                } else {
                    $arrCountryListData = [];
                }
            } else {
                $arrCountryListData = [];
            }

            return view('livewire.drp_account')->with('countrylist', $arrCountryListData);
        } else {
            // Session NOK, logout
            return redirect('/login')->with('message', 'Your account is used to login in other device or invalid session.');
        }
    }

    function getDataTable(Request $request) {
        //Log::debug($request);
        // 'order' =>
        //  array (
        //    0 =>
        //    array (
        //      'column' => '0',
        //      'dir' => 'desc',
        //    ),
        //  ),
        //  'start' => '0',
        //  'length' => '200',
        //  'search' =>
        //  array (
        //    'value' => NULL,
        //    'regex' => 'false',
        //  ),
        $drawId = $request['draw'];
        $orderColumn = $request['order'][0]['column'];
        $orderDirection = $request['order'][0]['dir'];

        $offsetRow = $request['start'];
        $lengthRow = $request['length'];
        $searchValue = '';
        if (isset($request['search']['value'])) {
            $searchValue = $request['search']['value'];
        }

        // Session data
        $sessEmail = $request->session()->get('xxxSessEmail');
        $sessionId = $request->session()->get('xxxSessId');

        $grpcClient = new XXXAccountServiceClient(authGRPCAddress, ['credentials' => ChannelCredentials::createInsecure(),]);

        $dataTableRequest = new XXXTableRequest();
        $dataTableRequest->setSessionid($sessionId);
        $dataTableRequest->setUseremail($sessEmail);
        $dataTableRequest->setIsactive("all");
        $dataTableRequest->setOrderfieldno($orderColumn);
        $dataTableRequest->setOrderdirection($orderDirection);
        $dataTableRequest->setOffsetrows($offsetRow);
        $dataTableRequest->setLengthrows($lengthRow);
        $dataTableRequest->setSearchvalue($searchValue);

        list($result, $status) = $grpcClient->GetDataTableAccount($dataTableRequest)->wait();

        $grpcHitStatus = $status->code;
        Log::debug('grpcHitStatus: '.$grpcHitStatus);

        if ($grpcHitStatus === 0) {
            $respStatus = $result->getStatus();
            Log::debug('respStatus: '.$respStatus);

            if ($respStatus === '000') {
                $arrDatatable = $result->getDatatable();
                // Compose datatables data
                $dataJSONData = [];
                // {"draw":1,"recordsTotal":877,"recordsFiltered":877,"data":[{"client_id":"1W20210524053016","client_name":"1WorldTech","client_country":"91","country_name":"INDIA","currency_id":"USD","is_active":"<i class=\"fa fa-check\" aria-hidden=\"true\" style=\"color: green\"><\/i>","action":"<a href=\"javascript:void(0)\" class=\"edit btn btn-success btn-sm\" data-toggle=\"modal\" data-target=\"#modalEditClient\" data-clientId=\"1W20210524053016\" data-clientName=\"1WorldTech\" data-clientCountryId=\"91\">Edit<\/a> <a href=\"javascript:void(0)\" class=\"delete btn btn-danger btn-sm\" data-toggle=\"modal\" data-target=\"#modalDelClient\" data-clientId=\"1W20210524053016\" data-clientName=\"1WorldTech\">Delete<\/a>","DT_RowIndex":1},{"client_id":"MA20210926051857","client_name":"MAO-FCM03","client_country":"86","country_name":"CHINA","currency_id":"SMS","is_active":"<i class=\"fa fa-check\" aria-hidden=\"true\" style=\"color: green\"><\/i>","action":"<a href=\"javascript:void(0)\" class=\"edit btn btn-success btn-sm\" data-toggle=\"modal\" data-target=\"#modalEditClient\" data-clientId=\"MA20210926051857\" data-clientName=\"MAO-FCM03\" data-clientCountryId=\"86\">Edit<\/a> <a href=\"javascript:void(0)\" class=\"delete btn btn-danger btn-sm\" data-toggle=\"modal\" data-target=\"#modalDelClient\" data-clientId=\"MA20210926051857\" data-clientName=\"MAO-FCM03\">Delete<\/a>","DT_RowIndex":2},{"client_id":"MA20211006110158","client_name":"MAO-ECUCT18","client_country":"86","country_name":"CHINA","currency_id":"SMS","is_active":"<i class=\"fa fa-check\" aria-hidden=\"true\" style=\"color: green\"><\/i>","action":"<a href=\"javascript:void(0)\" class=\"edit btn btn-success btn-sm\" data-toggle=\"modal\" data-target=\"#modalEditClient\" data-clientId=\"MA20211006110158\" data-clientName=\"MAO-ECUCT18\" data-clientCountryId=\"86\">Edit<\/a> <a href=\"javascript:void(0)\" class=\"delete btn btn-danger btn-sm\" data-toggle=\"modal\" data-target=\"#modalDelClient\" data-clientId=\"MA20211006110158\" data-clientName=\"MAO-ECUCT18\">Delete<\/a>","DT_RowIndex":3},{"client_id":"MA20211006110712","client_name":"MAO-ECUCT19","client_country":"86","country_name":"CHINA","currency_id":"SMS","is_active":"<i class=\"fa fa-check\" aria-hidden=\"true\" style=\"color: green\"><\/i>","action":"<a href=\"javascript:void(0)\" class=\"edit btn btn-success btn-sm\" data-toggle=\"modal\" data-target=\"#modalEditClient\" data-clientId=\"MA20211006110712\" data-clientName=\"MAO-ECUCT19\" data-clientCountryId=\"86\">Edit<\/a> <a href=\"javascript:void(0)\" class=\"delete btn btn-danger btn-sm\" data-toggle=\"modal\" data-target=\"#modalDelClient\" data-clientId=\"MA20211006110712\" data-clientName=\"MAO-ECUCT19\">Delete<\/a>","DT_RowIndex":4},{"client_id":"MA20211006110455","client_name":"MAO-ECUCT20","client_country":"86","country_name":"CHINA","currency_id":"SMS","is_active":"<i class=\"fa fa-check\" aria-hidden=\"true\" style=\"color: green\"><\/i>","action":"<a href=\"javascript:void(0)\" class=\"edit btn btn-success btn-sm\" data-toggle=\"modal\" data-target=\"#modalEditClient\" data-clientId=\"MA20211006110455\" data-clientName=\"MAO-ECUCT20\" data-clientCountryId=\"86\">Edit<\/a> <a href=\"javascript:void(0)\" class=\"delete btn btn-danger btn-sm\" data-toggle=\"modal\" data-target=\"#modalDelClient\" data-clientId=\"MA20211006110455\" data-clientName=\"MAO-ECUCT20\">Delete<\/a>","DT_RowIndex":5},{"client_id":"MA20211007052106","client_name":"MAO-ECUCT21","client_country":"86","country_name":"CHINA","currency_id":"SMS","is_active":"<i class=\"fa fa-check\" aria-hidden=\"true\" style=\"color: green\"><\/i>","action":"<a href=\"javascript:void(0)\" class=\"edit btn btn-success btn-sm\" data-toggle=\"modal\" data-target=\"#modalEditClient\" data-clientId=\"MA20211007052106\" data-clientName=\"MAO-ECUCT21\" data-clientCountryId=\"86\">Edit<\/a> <a href=\"javascript:void(0)\" class=\"delete btn btn-danger btn-sm\" data-toggle=\"modal\" data-target=\"#modalDelClient\" data-clientId=\"MA20211007052106\" data-clientName=\"MAO-ECUCT21\">Delete<\/a>","DT_RowIndex":6},{"client_id":"MA20211007052351","client_name":"MAO-ECUCT22","client_country":"86","country_name":"CHINA","currency_id":"SMS","is_active":"<i class=\"fa fa-check\" aria-hidden=\"true\" style=\"color: green\"><\/i>","action":"<a href=\"javascript:void(0)\" class=\"edit btn btn-success btn-sm\" data-toggle=\"modal\" data-target=\"#modalEditClient\" data-clientId=\"MA20211007052351\" data-clientName=\"MAO-ECUCT22\" data-clientCountryId=\"86\">Edit<\/a> <a href=\"javascript:void(0)\" class=\"delete btn btn-danger btn-sm\" data-toggle=\"modal\" data-target=\"#modalDelClient\" data-clientId=\"MA20211007052351\" data-clientName=\"MAO-ECUCT22\">Delete<\/a>","DT_RowIndex":7},{"client_id":"MA20211007052605","client_name":"MAO-ECUCT23","client_country":"86","country_name":"CHINA","currency_id":"SMS","is_active":"<i class=\"fa fa-check\" aria-hidden=\"true\" style=\"color: green\"><\/i>","action":"<a href=\"javascript:void(0)\" class=\"edit btn btn-success btn-sm\" data-toggle=\"modal\" data-target=\"#modalEditClient\" data-clientId=\"MA20211007052605\" data-clientName=\"MAO-ECUCT23\" data-clientCountryId=\"86\">Edit<\/a> <a href=\"javascript:void(0)\" class=\"delete btn btn-danger btn-sm\" data-toggle=\"modal\" data-target=\"#modalDelClient\" data-clientId=\"MA20211007052605\" data-clientName=\"MAO-ECUCT23\">Delete<\/a>","DT_RowIndex":8},{"client_id":"MA20211007052808","client_name":"MAO-ECUCT24","client_country":"86","country_name":"CHINA","currency_id":"SMS","is_active":"<i class=\"fa fa-check\" aria-hidden=\"true\" style=\"color: green\"><\/i>","action":"<a href=\"javascript:void(0)\" class=\"edit btn btn-success btn-sm\" data-toggle=\"modal\" data-target=\"#modalEditClient\" data-clientId=\"MA20211007052808\" data-clientName=\"MAO-ECUCT24\" data-clientCountryId=\"86\">Edit<\/a> <a href=\"javascript:void(0)\" class=\"delete btn btn-danger btn-sm\" data-toggle=\"modal\" data-target=\"#modalDelClient\" data-clientId=\"MA20211007052808\" data-clientName=\"MAO-ECUCT24\">Delete<\/a>","DT_RowIndex":9},{"client_id":"MA20211007053014","client_name":"MAO-ECUCT25","client_country":"86","country_name":"CHINA","currency_id":"SMS","is_active":"<i class=\"fa fa-check\" aria-hidden=\"true\" style=\"color: green\"><\/i>","action":"<a href=\"javascript:void(0)\" class=\"edit btn btn-success btn-sm\" data-toggle=\"modal\" data-target=\"#modalEditClient\" data-clientId=\"MA20211007053014\" data-clientName=\"MAO-ECUCT25\" data-clientCountryId=\"86\">Edit<\/a> <a href=\"javascript:void(0)\" class=\"delete btn btn-danger btn-sm\" data-toggle=\"modal\" data-target=\"#modalDelClient\" data-clientId=\"MA20211007053014\" data-clientName=\"MAO-ECUCT25\">Delete<\/a>","DT_RowIndex":10}]}x
                $count = 1;
                foreach ($arrDatatable as $datatable) {
                    $detName = $datatable->getName();
                    $detEmail = $datatable->getEmail();
                    $detPhonenumber = $datatable->getPhonenumber();
                    $detBirthdate = $datatable->getBirthdate();
                    $detGender = $datatable->getGender();
                    $detAddress = $datatable->getAddress();
                    $detCity = $datatable->getCity();
                    $detRegion = $datatable->getRegion();
                    //$detCountryiso = $datatable->getCountryiso();
                    $detCountryname = $datatable->getCountryname();
                    $detCreatedat = $datatable->getCreatedat();
                    $detEmailverifiedat = $datatable->getEmailverifiedat();
                    $detPhoneverifiedat = $datatable->getPhoneverifiedat();
                    $detIsactive = $datatable->getIsactive();
                    $detActiv = '<i class="fa fa-check" aria-hidden="true" style="color: green"></i>';
                    if ($detIsactive === false) {
                        $detActiv = '<i class="fa fa-close" aria-hidden="true" style="color: red"></i>';
                    }
                    $detAction = '<a href="javascript:void(0)" class="edit btn btn-success btn-sm" data-toggle="modal" data-target="#modalEditAccount" data-email="'.$detEmail.
                        '">Edit</a> <a href="javascript:void(0)" class="delete btn btn-danger btn-sm" data-toggle="modal" data-target="#modalDelAccount" data-email="'.
                        $detEmail.'" data-Name="'.$detName.'">Delete</a>';

                    $jsonDetail = array(
                        'name' => $detName,
                        'email' => $detEmail,
                        'phone_number' => $detPhonenumber,
                        'birthdate' => $detBirthdate,
                        'gender' => $detGender,
                        'address' => $detAddress,
                        'city' => $detCity,
                        'region' => $detRegion,
                        'country_name' => $detCountryname,
                        'created_at' => $detCreatedat,
                        'email_verified_at' => $detEmailverifiedat,
                        'phone_verified_at' => $detPhoneverifiedat,
                        'active' => $detActiv,
                        'action' => $detAction
                    );

                    // Add
                    array_push($dataJSONData, $jsonDetail);

                    $count = $count + 1;
                }

                $dataRecordTotal = $result->getRecordtotal();
                $dataRecordFiltered = $result->getRecordFiltered();
                $data = $dataJSONData;
            } else {
                // Error, can't show the data
                $dataRecordTotal = 0;
                $dataRecordFiltered = 0;
                $data = [];
            }
        } else {
            $dataRecordTotal = 0;
            $dataRecordFiltered = 0;
            $data = [];
        }

        // Compose array response
        $arrResponse = array(
            'draw' => $drawId,
            'recordsTotal' => $dataRecordTotal,
            'recordsFiltered' => $dataRecordFiltered,
            'data' => $data
        );

        return json_encode($arrResponse);
    }

    function createTronAccount(Request $request, string $transactionId, string $userEmail): int
    {
        // Session data
        $sessEmail = $request->session()->get('xxxSessEmail');
        $sessionId = $request->session()->get('xxxSessId');

        $grpcClient = new klpOnServiceClient(crotGRPCAddress, ['credentials' => ChannelCredentials::createInsecure(),]);

        $createTronAccountRequest = new klponCreateAccountRequest();
        $createTronAccountRequest->setTransactionId($transactionId);
        $createTronAccountRequest->setAccountEmail($userEmail);
        $createTronAccountRequest->setUserEmail($sessEmail);
        $createTronAccountRequest->setSessionId($sessionId);
        $createTronAccountRequest->setRemoteIPAddress($request->ip());

        list($result, $status) = $grpcClient->CreateAccount($createTronAccountRequest)->wait();

        $grpcHitStatus = $status->code;
        Log::debug('grpcHitStatus tronaccount: '.$grpcHitStatus);

        if ($grpcHitStatus === 0) {
            Log::debug("CREATED BRO!");

            $respStatus = $result->getStatus();
            Log::debug('respStatus: '.$respStatus);

            if ($respStatus === '000') {
                return 0;
            } else if ($respStatus === '204') {
                return -204;    // Email is used
            } else {
                return -1;
            }
        } else {
            return -2;
        }
    }

    function doSaveNewAccount(Request $request): int
    {
        // Define transactionId
        $transactionId = Uuid::uuid4();

        // Get incoming request data
        $name = convertNilToEmptyString($request->input('name'));
        $email = convertNilToEmptyString($request->input('email'));
        $phoneNumber = convertNilToEmptyString($request->input('phoneNumber'));
        $idCard = convertNilToEmptyString($request->input('idCard'));
        $idCardType = convertNilToEmptyString($request->input('idCardType'));
        $password01 = convertNilToEmptyString($request->input('password01'));
        $password02 = convertNilToEmptyString($request->input('password02'));
        $birthdate = convertNilToEmptyString($request->input('birthdate'));
        $gender = convertNilToEmptyString($request->input('gender'));
        $address = convertNilToEmptyString($request->input('address'));
        $city = convertNilToEmptyString($request->input('city'));
        $region = convertNilToEmptyString($request->input('region'));
        $countryISO = convertNilToEmptyString($request->input('countryiso'));
        $countryName = convertNilToEmptyString($request->input('countryname'));
        $uplineReferralCode = convertNilToEmptyString($request->input('uplineReferralCode'));
        $remoteIPAddress = $request->ip();

        // Session data
        $sessEmail = $request->session()->get('xxxSessEmail');
        $sessionId = $request->session()->get('xxxSessId');

        $grpcClient = new XXXAccountServiceClient(authGRPCAddress, ['credentials' => ChannelCredentials::createInsecure(),]);

        $newAccountRequest = new XXXNewAccountRequest();
        $newAccountRequest->setName($name);
        $newAccountRequest->setEmail($email);
        $newAccountRequest->setPassword01($password01);
        $newAccountRequest->setPassword02($password02);
        $newAccountRequest->setPhonenumber($phoneNumber);
        $newAccountRequest->setIdcardtype($idCardType);
        $newAccountRequest->setIdcardnumber($idCard);
        $newAccountRequest->setBirthdate($birthdate);
        $newAccountRequest->setGender($gender);
        $newAccountRequest->setAddress($address);
        $newAccountRequest->setCity($city);
        $newAccountRequest->setRegion($region);
        $newAccountRequest->setCountryiso($countryISO);
        $newAccountRequest->setCountryname($countryName);
        $newAccountRequest->setUseremail($sessEmail);
        $newAccountRequest->setSessionid($sessionId);
        $newAccountRequest->setRemoteipaddress($remoteIPAddress);
        $newAccountRequest->setUplinereferralid($uplineReferralCode);

        list($result, $status) = $grpcClient->SaveNewAccount($newAccountRequest)->wait();

        $grpcHitStatus = $status->code;
        Log::debug('grpcHitStatus: '.$grpcHitStatus);

        if ($grpcHitStatus === 0) {
            Log::debug("OK BRO!");

            $respStatus = $result->getStatus();
            Log::debug('respStatus: '.$respStatus);

            if ($respStatus === '000') {
                return $this->createTronAccount($request, $transactionId, $email);
            } else if ($respStatus === '204') {
                return -204;    // Email is used
            } else {
                return -1;
            }
        } else {
            return -2;
        }
    }

    function getDetailAccount(Request $request)
    {
        $refEmail = convertNilToEmptyString($request->input('refemail'));

        // Session data
        $sessEmail = $request->session()->get('xxxSessEmail');
        $sessionId = $request->session()->get('xxxSessId');
        $remoteIPAddress = $request->ip();

        $grpcClient = new XXXAccountServiceClient(authGRPCAddress, ['credentials' => ChannelCredentials::createInsecure(),]);

        $newAccountDetailRequest = new XXXGetDetailAccountRequest();
        $newAccountDetailRequest->setReffemail($refEmail);
        $newAccountDetailRequest->setUseremail($sessEmail);
        $newAccountDetailRequest->setSessionid($sessionId);
        $newAccountDetailRequest->setRemoteipaddress($remoteIPAddress);

        list($result, $status) = $grpcClient->GetDetailAccount($newAccountDetailRequest)->wait();

        $grpcHitStatus = $status->code;
        Log::debug('grpcHitStatus: '.$grpcHitStatus);

        if ($grpcHitStatus === 0) {
            Log::debug("OK BRO!");

            $respStatus = $result->getStatus();
            Log::debug('respStatus: '.$respStatus);

            if ($respStatus === '000') {
                $arrToJSON = array(
                    'name' => $result->getName(),
                    'email' => $result->getEmail(),
                    'phonenumber' => $result->getPhonenumber(),
                    'idCardNumber' => $result->getIdcardnumber(),
                    'idCardType' => $result->getIdcardtype(),
                    'birthdate' => $result->getBirthdate(),
                    'gender' => $result->getGender(),
                    'address' => $result->getAddress(),
                    'city' => $result->getCity(),
                    'region' => $result->getRegion(),
                    'countryISO' => $result->getCountryiso(),
                    'countryName' => $result->getCountryname(),
                    'uplineReferralID' => $result->getUplinereferralid(),
                    'createdAt' => $result->getCreateat(),
                    'updatedAt' => $result->getUpdatedat(),
                    'phoneVerifiedAt' => $result->getPhoneverifiedat(),
                    'emailVerifiedAt' => $result->getEmailverifiedat(),
                    'isApproved' => $result->getIsapproved(),
                    'approvalDateTime' => $result->getApprovaldatetime(),
                    'referralId' => $result->getReferralid(),
                    'status' => $respStatus
                );

                return json_encode($arrToJSON);
            } else {
                $arrToJSON = array(
                    'status' => $respStatus
                );

                return json_encode($arrToJSON);
            }
        } else {
            $arrToJSON = array(
                'status' => '204'
            );

            return json_encode($arrToJSON);
        }
    }

    function doSaveEditAccount(Request $request) {
        // Get incoming request data
        $refEmail = convertNilToEmptyString($request->input('refemail'));
        $name = convertNilToEmptyString($request->input('name'));
        $email = convertNilToEmptyString($request->input('email'));
        $phoneNumber = convertNilToEmptyString($request->input('phoneNumber'));
        $idCard = convertNilToEmptyString($request->input('idCard'));
        $idCardType = convertNilToEmptyString($request->input('idCardType'));
        $password01 = convertNilToEmptyString($request->input('password01'));
        $password02 = convertNilToEmptyString($request->input('password02'));
        $birthdate = convertNilToEmptyString($request->input('birthdate'));
        $gender = convertNilToEmptyString($request->input('gender'));
        $address = convertNilToEmptyString($request->input('address'));
        $city = convertNilToEmptyString($request->input('city'));
        $region = convertNilToEmptyString($request->input('region'));
        $countryISO = convertNilToEmptyString($request->input('countryiso'));
        $countryName = convertNilToEmptyString($request->input('countryname'));
        $uplineReferralCode = convertNilToEmptyString($request->input('uplineReferralCode'));
        $isActive = true;
        $remoteIPAddress = $request->ip();

        // Session data
        $sessEmail = $request->session()->get('xxxSessEmail');
        $sessionId = $request->session()->get('xxxSessId');

        $grpcClient = new XXXAccountServiceClient(authGRPCAddress, ['credentials' => ChannelCredentials::createInsecure(),]);

        $localXXXEditAccountRequest = new XXXEditAccountRequest();
        $localXXXEditAccountRequest->setReffemail($refEmail);
        $localXXXEditAccountRequest->setName($name);
        $localXXXEditAccountRequest->setEmail($email);
        $localXXXEditAccountRequest->setPhonenumber($phoneNumber);
        $localXXXEditAccountRequest->setIdcardnumber($idCard);
        $localXXXEditAccountRequest->setIdcardtype($idCardType);
        $localXXXEditAccountRequest->setPassword01($password01);
        $localXXXEditAccountRequest->setPassword02($password02);
        $localXXXEditAccountRequest->setBirthdate($birthdate);
        $localXXXEditAccountRequest->setGender($gender);
        $localXXXEditAccountRequest->setAddress($address);
        $localXXXEditAccountRequest->setCity($city);
        $localXXXEditAccountRequest->setRegion($region);
        $localXXXEditAccountRequest->setCountryiso($countryISO);
        $localXXXEditAccountRequest->setCountryname($countryName);
        $localXXXEditAccountRequest->setUplinereferralid($uplineReferralCode);
        $localXXXEditAccountRequest->setIsactive($isActive);
        $localXXXEditAccountRequest->setRemoteipaddress($remoteIPAddress);
        $localXXXEditAccountRequest->setUseremail($sessEmail);
        $localXXXEditAccountRequest->setSessionid($sessionId);

        list($result, $status) = $grpcClient->EditAccount($localXXXEditAccountRequest)->wait();

        $grpcHitStatus = $status->code;
        Log::debug('grpcHitStatus: '.$grpcHitStatus);

        if ($grpcHitStatus === 0) {
            Log::debug("EDITED BRO!");

            $respStatus = $result->getStatus();
            Log::debug('respStatus: '.$respStatus);

            if ($respStatus === '000') {
                return 0;
            } else if ($respStatus === '204') {
                return -204;    // Email is used
            } else {
                return -1;
            }
        } else {
            return -2;
        }
    }

    function doDeleteAccount(Request $request): int
    {
        $email = convertNilToEmptyString($request->input('email'));

        // Session data
        $sessEmail = $request->session()->get('xxxSessEmail');
        $sessionId = $request->session()->get('xxxSessId');

        $grpcClient = new XXXAccountServiceClient(authGRPCAddress, ['credentials' => ChannelCredentials::createInsecure(),]);

        $newDeleteRequest = new XXXDelAccountRequest();
        $newDeleteRequest->setDelemail($email);
        $newDeleteRequest->setUseremail($sessEmail);
        $newDeleteRequest->setSessionid($sessionId);
        $newDeleteRequest->setRemoteipaddress($request->ip());

        list($result, $status) = $grpcClient->DeleteAccount($newDeleteRequest)->wait();

        $grpcHitStatus = $status->code;
        Log::debug('grpcHitStatus: '.$grpcHitStatus);

        if ($grpcHitStatus === 0) {
            Log::debug("DEL BRO!");

            $respStatus = $result->getStatus();
            Log::debug('respStatus: '.$respStatus);

            if ($respStatus === '000') {
                return 0;
            } else if ($respStatus === '202') {
                return -202;    // invalid email
            } else {
                return -1;
            }
        } else {
            return -2;
        }
    }
}
