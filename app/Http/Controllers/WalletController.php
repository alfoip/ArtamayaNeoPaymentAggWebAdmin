<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WalletController extends Controller
{
    function index(Request $request) {
        return view('livewire.drp_wallet');
    }
}
