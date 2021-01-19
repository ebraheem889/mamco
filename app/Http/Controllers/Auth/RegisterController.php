<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
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
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'company_name' => ['required', 'string','max:100','regex:/\p{Arabic}/u'],
            'company_name_en' => ['required', 'string', 'regex:/(^([a-zA-Z0-9_ ]*$)(\d+)?$)/u', 'max:100'],
            'commercial_number' => ['required', 'numeric','digits_between:9,20'],
            'address' => ['required', 'string','max:100'],
            'telephone' => ['required', 'numeric','digits_between:11,16'],
            'telephone2' => ['digits_between:0,16'],
            'approved_policy' => ['required', 'string'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        try {
            return User::create([
                'company_name' => $data['company_name'],
                'company_name_en' => $data['company_name_en'],
                'commercial_number' => $data['commercial_number'],
                'address' => $data['address'],
                'telephone' => $data['telephone'],
                'telephone2' => $data['telephone2'] == null ? 'There Is No Phone' :$data['telephone2'],
                'approved_policy' => $data['approved_policy'],
                'email' => $data['email'],
                'password' => Hash::make($data['password']),
            ]);
        }
        catch (\Exception $exception)
        {
            return $exception;

        }
    }
}
