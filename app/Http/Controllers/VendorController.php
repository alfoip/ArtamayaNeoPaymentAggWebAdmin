<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VendorController extends Controller
{
    function index(Request $request) {

        $sessionOK = checkSession($request);

        if ($sessionOK) {

            $sessEmail = $request->session()->get('xxxSessEmail');
            $sessionId = $request->session()->get('xxxSessId');
            
            $arrJSONCountry = getCountryList($request);         //  Get Country Liet
            $arrJSONClient = getClientList($request, '*');      //  Get Client List
            $arrJSONCurrency = getCurrencyList($request);       //  Get Currency List

            return view('livewire.vendors.vendor')
                ->with('countryList', $arrJSONCountry)
                ->with('currencyList', $arrJSONCurrency)
                ->with('clientList', $arrJSONClient);
            
        } else {
                // Session NOK, logout
                return redirect('/login')->with('message', 'Your account is used to login in other device or invalid session.');
        }
    }
}
