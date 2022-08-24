<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;

class ClientAccountController extends Controller
{
    public function checkAccountStatus()
    {
        $clients = Client::all();
        return view ('client_account_status',compact('clients'));
    }
}
