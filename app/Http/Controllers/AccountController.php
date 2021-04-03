<?php

namespace App\Http\Controllers;

use App\Models\Account;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AccountController extends Controller
{
    public function userInformation()
    {
        $account = Auth::user();
        return view('user-account', [
            'account' => $account
        ]);
    }
}
