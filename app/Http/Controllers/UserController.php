<?php

namespace App\Http\Controllers;

use Grpc\ChannelCredentials;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use XXX\AdminLoginRequest;
use XXX\AdminLogoutRequest;
use XXX\AdminRegisterAdminRequest;
use XXX\AdminRegisterClientRequest;
use XXX\AuthServiceClient;


class UserController extends Controller
{
    function Login() {
        Auth::logout();
        session_unset();

        return view('livewire.art_signin')->layout('layouts.customapp');
    }

    function DoLogin(Request $request) {
        $grpcClient = new AuthServiceClient(authGRPCAddress, ['credentials' => ChannelCredentials::createInsecure(),]);

        $loginRequest = new AdminLoginRequest();
        $loginRequest->setEmail($request->input('email'));
        $loginRequest->setPassword($request->input('password'));
        $loginRequest->setRemoteipaddress($request->ip());

        list($result, $status) = $grpcClient->DoAdminLogin($loginRequest)->wait();

        $grpcHitStatus = $status->code;

        if ($grpcHitStatus === 0) {
            Log::debug('HEHEH');
            //Log::debug('status: '.$result->getStatus().', email: '.$result->getEmail().', clientId: '.$result->getClientid().', sessionId: '.$result->getSessionid().', fullName: '.$result->getFullname().', phoneNumber: '.$result->getPhonenumber());

            $respStatus = $result->getStatus();

            if ($respStatus === '000') {
                // Set session data
                $sessEmail = $result->getEmail();
                $sessId = $result->getSessionid();
                $sessFullName = $result->getFullname();

                $request->session()->put('xxxSessId', $sessId);
                $request->session()->put('xxxSessEmail', $sessEmail);
                $request->session()->put('xxxSessName', $sessFullName);

                Log::debug('DSHSSSS');
                return redirect('/dashboard');
            } else {
                return redirect()->back()->with('message', 'Failed to login. Invalid username and password.');
            }
        } else {
            Log::debug('HUHU');
            return redirect()->back()->with('message', 'Failed to login. Please try again later.');
        }
    }

    function DoLogOut(Request $request) {
        $sessEmail = $request->session()->get('sessEmail');
        $sessionId = $request->session()->get('sessId');

        // Wipe the login session
        Auth::logout();
        $request->session()->flush();
        session_unset();

        $grpcClient = new AuthServiceClient(authGRPCAddress, ['credentials' => ChannelCredentials::createInsecure(),]);

        $logoutRequest = new AdminLogoutRequest();
        $logoutRequest->setEmail($sessEmail);
        $logoutRequest->setSessionid($sessionId);

        list($result, $status) = $grpcClient->DoAdminLogout($logoutRequest)->wait();

        // Ignore the result and status
        Log::debug($result->getStatus().' - '.$status->code);

        return redirect('/');
    }

    function SignUp() {
        return view('livewire.drp_signup')->layout('layouts.customapp');
    }

    function DoSignUpNewClient(Request $request): int
    {
        // Fields
        $fullName = $request->input('fullName');
        $email = $request->input('email');
        $password01 = $request->input('password01');
        $password02 = $request->input('password02');
        $phoneNumber = $request->input('phoneNumber');
        $birthDate = $request->input('birthDate');
        $gender = $request->input('gender');
        $address = $request->input('address');
        $city = $request->input('city');
        $region = $request->input('region');
        $country = $request->input('country');
        $clientId = $request->input('clientId');

        $grpcClient = new AuthServiceClient(authGRPCAddress, ['credentials' => ChannelCredentials::createInsecure(),]);

        $signUpRequest = new AdminRegisterClientRequest();
        $signUpRequest->setFullname($fullName);
        $signUpRequest->setEmail($email);
        $signUpRequest->setPassword01($password01);
        $signUpRequest->setPassword02($password02);
        $signUpRequest->setPhonenumber($phoneNumber);
        $signUpRequest->setBirthdate($birthDate);
        $signUpRequest->setGender($gender);
        $signUpRequest->setAddress($address);
        $signUpRequest->setCity($city);
        $signUpRequest->setRegion($region);
        $signUpRequest->setCountry($country);
        $signUpRequest->setClientid($clientId);

        list($result, $status) = $grpcClient->DoRegisterNewClientAccount($signUpRequest)->wait();

        $grpcHitStatus = $status->code;

        if ($grpcHitStatus === 0) {
            $respStatus = $result->getStatus();
            if ($respStatus === '000') {
                return 0;
            } else {
                return -1;
            }
        } else {
            return -2;
        }
    }

    function DoSignUpNewAdmin(Request $request): int
    {
        // Fields
        $fullName = $request->input('fullName');
        $email = $request->input('email');
        $password01 = $request->input('password01');
        $password02 = $request->input('password02');
        $phoneNumber = $request->input('phoneNumber');
        $birthDate = $request->input('birthDate');
        $gender = $request->input('gender');
        $address = $request->input('address');
        $city = $request->input('city');
        $region = $request->input('region');
        $country = $request->input('country');

        $grpcClient = new AuthServiceClient(authGRPCAddress, ['credentials' => ChannelCredentials::createInsecure(),]);

        $signUpRequest = new AdminRegisterAdminRequest();
        $signUpRequest->setFullname($fullName);
        $signUpRequest->setEmail($email);
        $signUpRequest->setPassword01($password01);
        $signUpRequest->setPassword02($password02);
        $signUpRequest->setPhonenumber($phoneNumber);
        $signUpRequest->setBirthdate($birthDate);
        $signUpRequest->setGender($gender);
        $signUpRequest->setAddress($address);
        $signUpRequest->setCity($city);
        $signUpRequest->setRegion($region);
        $signUpRequest->setCountry($country);

        list($result, $status) = $grpcClient->DoRegisterNewAdminAccount($signUpRequest)->wait();

        $grpcHitStatus = $status->code;

        if ($grpcHitStatus === 0) {
            $respStatus = $result->getStatus();
            if ($respStatus === '000') {
                return 0;
            } else {
                return -1;
            }
        } else {
            return -2;
        }
    }
}
