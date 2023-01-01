<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class CustomAuthController extends Controller
{
    /**
     * Login screen
     * @author thanh.clg
     */
    public function index()
    {
        return view('auth.login');
    }

    /**
     * Handle login form submit
     * @author thanh.clg
     */
    public function customLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('dashboard')
                ->withSuccess('Signed in');
        }

        return redirect()->route('dashboard')->withSuccess('Login are not valid');
    }

    /**
     * Registration screen
     * @author thanh.clg
     */
    public function registration()
    {
        return view('auth.registration');
    }

    /**
     * Handle registration form submit
     * @author thanh.clg
     */
    public function customRegistration(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);

        $data = $request->all();
        $check = $this->create($data);

        return redirect()->route('dashboard')->withSuccess('You have signed-in');
    }

    /**
     * create user function
     * @author thanh.clg
     */
    public function create(array $data)
    {
        return User::create([
            'first_name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'active' => true,
            'del' => false,
        ]);
    }

    /**
     * Signout
     * @author thanh.clg
     */
    public function signOut()
    {
        Session::flush();
        Auth::logout();

        return Redirect('login');
    }
}
