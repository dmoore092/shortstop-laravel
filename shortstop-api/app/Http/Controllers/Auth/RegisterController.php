<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Player;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

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
    protected $redirectTo = '/dashboard';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /*
    *   Redirect after registration
    */
    protected function redirectTo()
    {
        // if (auth()->user()->role_id == 1) {
        //     return '/dashboard';
        // }
        // else if (auth()->user()->role_id == 2){
        //     return '/dashboard';
        // }
        // else{
        //     $id = auth()->user()->role_id;
        //     $path = '/dashboard';
        //     return $path;
        // }
        return '/dashboard';
    }
    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        $messages = [
            'registration_code.in' => 'Please email kprestano@athleticprospects.com for the correct registration code',
        ];
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'registration_code' => ['required', 'string', 'max:255', 'in:Elite Prospects'],
        ], $messages);

    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'role' => 'player'
        ]);

        return $user;


    }
}
