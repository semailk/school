<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param array $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'min:2', 'max:50' ,'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'img' => ['mimes:jpeg,jpg,png|required|max:10000'],
            'phone' => ['required', 'string', 'min:7','max:50'],
            'code_for_students' => ['required', 'string','min:2'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param array $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        $img = request()->file('img')->store('avatar', 'public');

        if ($data['code_for_students'] == 'student2021') {
            $userSave = new User();
            $userSave->name = $data['name'];
            $userSave->email = $data['email'];
            $userSave->password = Hash::make($data['password']);
            $userSave->img = $img;
            $userSave->phone = $data['phone'];
            $userSave->save();
            return $userSave;
        } else {
            return abort(404, 'Student code no active');
        }

//        return User::create([
////            $data
//            'name' => $data['name'],
//            'last_name' => $data['last_name'],
//            'email' => $data['email'],
//            'password' => Hash::make($data['password']),
//            'img' => $data['img']
//        ]);
    }
}
