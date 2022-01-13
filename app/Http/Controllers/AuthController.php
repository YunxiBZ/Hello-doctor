<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Patient;
use App\Models\Practitioner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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
            $request->session()->regenerate();
            return redirect()->to('/');
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
        $request->validate([
            'firstname' => ['required','max:255'],
            'lastname' => ['required','max:255'],
            'address' => ['required','max:255'],
            'zipcode' => ['required','max:5'],
            'city' => ['required','max:50'],
            'email' => ['required', 'email','unique:users'],
            'password' => ['required','confirmed'],
        ]);

        $user = new User();
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        //! status should be remove when the backoffice is finished
        $user->status = "active";
        $user->save();
        $user_id = User::where('email', $request->email)->first()->id;

        $patient = new Patient();
        $patient->firstname = $request->firstname;
        $patient->lastname = $request->lastname;
        $patient->email = $request->email;
        $patient->address = $request->address;
        $patient->zipcode = $request->zipcode;
        $patient->city = $request->city;
        $patient->user_id = $user_id;
        $patient->save();

        return redirect()->to('/login');
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
