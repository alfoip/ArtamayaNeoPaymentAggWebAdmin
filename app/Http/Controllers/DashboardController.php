<?php

namespace App\Http\Controllers;

use Grpc\ChannelCredentials;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Xxx\XXXAccountServiceClient;
use Xxx\XXXDashboardAccountRequest;
use Yajra\DataTables\Facades\DataTables;

class DashboardController extends Controller
{
    function index(Request $request) {
        // Check session
        $sessionOK = checkSession($request);

        if ($sessionOK) {
            // Session data
            $sessEmail = $request->session()->get('xxxSessEmail');
            $sessionId = $request->session()->get('xxxSessId');

            // Get account dashboard data
            $grpcClient = new XXXAccountServiceClient(authGRPCAddress, ['credentials' => ChannelCredentials::createInsecure(),]);

            $dashboardAccountRequest = new XXXDashboardAccountRequest();
            $dashboardAccountRequest->setUseremail($sessEmail);
            $dashboardAccountRequest->setSessionid($sessionId);
            $dashboardAccountRequest->setRemoteipaddress($request->ip());

            list($result, $status) = $grpcClient->GetDashboardAccount($dashboardAccountRequest)->wait();

            $grpcHitStatus = $status->code;
            Log::debug('grpcHitStatus: '.$grpcHitStatus);

            $dataUserCount = 0;
            $dataNewAccountToday = 0;
            $arrJSONData = [];

            if ($grpcHitStatus === 0) {
                $respStatus = $result->getStatus();
                Log::debug('respStatus: '.$respStatus);

                if ($respStatus === '000') {
                    $dataUserCount = $result->getTotalAccountCount();
                    $dataNewAccountToday = $result->getTodayNewAccountCount();
                    $dataLast10Account = $result->getLast10Account();

                    // $arrJSONData = array of jsondata

                    foreach ($dataLast10Account as $accountData) {
                        $rawDetail = array(
                            'name' => $accountData->getName(),
                            'email' => $accountData->getEmail(),
                            'phone_number' => $accountData->getPhonenumber(),
                            'birthdate' => $accountData->getBirthdate(),
                            'gender' => $accountData->getGender(),
                            'address' => $accountData->getAddress(),
                            'city' => $accountData->getCity(),
                            'region' => $accountData->getRegion(),
                            'country_iso' => $accountData->getCountryiso(),
                            'country_name' => $accountData->getCountryname(),
                            'created_at' => $accountData->getCreatedat(),
                            'email_verified_at' => $accountData->getEmailverifiedat(),
                            'phone_verified_at' => $accountData->getPhoneverifiedat(),
                            'active' => $accountData->getIsactive(),
                            'upline_referral_id' => $accountData->getUplinereferralid()
                        );

                        //$jsonDetail = json_encode($rawDetail);

                        // Put into main json array
                        array_push($arrJSONData, $rawDetail);
                    }
                } else {
                    $dataUserCount = 0;
                    $dataNewAccountToday = 0;
                    $arrJSONData = [];
                }
            } else {
                $dataUserCount = 0;
                $dataNewAccountToday = 0;
                $arrJSONData = [];
            }

            //Log::debug($arrJSONData);

            // Get total transaction traffics from date 1
            $thisMonthTransactionCount = 0;

            // Get total transaction traffic today
            $todayTransactionCount = 0;

            // Get total transaction this month - from date 1
            $thisMonthTransactionValue = 0;

            // Get total transaction today
            $todayTransactionValue = 0;

            // Get total deposit top up this month
            $thisMonthDepositValue = 0;

            // Get total deposit top up today
            $todayDepositValue = 0;

            // Get total withdrawal this month
            $thisMonthWithdrawalValue = 0;

            // Get total withdrawal today
            $todayWithdrawalValue = 0;

            return view('livewire.drp_dashboard')->with('dataUserCount', $dataUserCount)->with('todayNewUserCount', $dataNewAccountToday)
                ->with('dataMonthTransactionCount', $thisMonthTransactionCount)->with('todayTransactionCount', $todayTransactionCount)
                ->with('dataMonthTransactionValue', $thisMonthTransactionValue)->with('todayTransactionValue', $todayTransactionValue)
                ->with('dataMonthTopupValue', $thisMonthDepositValue)->with('dataTodayTopUpValue', $todayDepositValue)
                ->with('dataMonthWithdrawalValue', $thisMonthWithdrawalValue)->with('dataTodayWithdrawalValue', $todayWithdrawalValue)
                ->with('data10Users', $arrJSONData);
        } else {
            // Session is NOT OK
            return redirect('/login')->with('message', 'Your account is used to login in other device or invalid session.');
        }
    }

}
