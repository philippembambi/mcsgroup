<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use DB;

class UserController extends Controller
{
    public function __invoke()
    {

        $towns_and_countries = DB::table('towns')
        ->leftJoin('countries', 'towns.country_id', '=', 'countries.id')
        ->orderBy('towns.country_id')
        ->get();

		return view('user.authentications', ['towns_and_countries' => $towns_and_countries]);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $item
     */

    public function store(Request $request)
    {

    $this->validate($request, [
        'username' => 'required|max:255',
        'email' => 'email|max:255',
        'psw' => 'required|max:255'
    ]);

    User::create([
        'fullname' => $request->username,
        'phone_number' => $request->phonecode,
        'email' => $request->email,
        'password' => Hash::make($request->psw),
        'town'=> $request->ville
        ]);

        auth()->attempt([
            'password' => $request->psw,
            'email' => $request->email
        ], $request->remember);

        return redirect()->route('index');
    }

    /**
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function login(Request $request)
	{
		$credentials = $request->validate([
			'phone_number' => 'required',
			'password' => 'required',
		]);

		if (Auth::attempt($credentials, $request->remember)) {
			$request->session()->regenerate();

            return redirect()->route('index');
		}
		return back()->with('status', 'Numéro de téléphone ou Mot de passe incorrects');
	}

    public function logout() {

        auth()->logout();

        $towns_and_countries = DB::table('towns')
        ->leftJoin('countries', 'towns.country_id', '=', 'countries.id')
        ->orderBy('towns.country_id')
        ->get();

		return view('user.authentications', ['towns_and_countries' => $towns_and_countries]);
//        return redirect()->route('login');
    }

}
