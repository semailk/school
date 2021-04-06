<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class AccountController extends Controller
{
    public function userInformation()
    {
        $account = Account::query()->where('user_id', Auth::id())->first();
        return view('user-account', [
            'account' => $account
        ]);
    }

    public function imgUpdate(Request $request)
    {
        $rules = [
            'img' => 'mimes:jpeg,jpg,png|required|max:10000',
        ];
        $this->validate($request, $rules);
        $user = User::query()->findOrFail(Auth::id());

        $avatarName = $request->file('img')->store('avatar', 'public');

        Storage::disk('public')->delete($user->img);
        $user->img = $avatarName;
        $user->name = $request->name;
        $user->phone = $request->phone;
        $user->save();

        return redirect()->back();
    }
}
