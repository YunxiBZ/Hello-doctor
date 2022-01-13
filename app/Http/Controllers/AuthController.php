<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Patient;
use App\Models\Practitioner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    /**
     * handle login form for guest.
     *
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        if (Auth::attempt($credentials)) {
            $user = User::where('email', $request->email)->first()->role;
            $request->session()->regenerate();
            // for find the firstname
            switch ($user) {
                case 'administrator':
                    $firstname = "admin";
                    break;
                case 'pratitioner':
                    $firstname = Practitioner::where('email', $request->email)->first()->firstname;
                    break;
                case 'patient':
                    $firstname = Patient::where('email', $request->email)->first()->firstname;
                    break;
                default:
                    $firstname = '';
            }
            // dd($firstname);
            return redirect('/')->with('firstname', $firstname);
        }

        return redirect()->to('login')->withErrors('Identifiants invalides');
    }
    /**
     * handle signup form for guest.
     *
     * @return \Illuminate\Http\Response
     */
    public function signup(Request $request)
    {
        dd('signup');
    }

    /**
     * handle logout form for guest.
     *
     * @return \Illuminate\Http\Response
     */
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('login');
    }
}
