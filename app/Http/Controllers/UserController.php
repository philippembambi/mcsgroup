<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use DB;
use Flashy;
use Exception;

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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userTerminal = DB::table('terminals')
                    ->leftJoin('users', 'terminals.id_user', '=', 'users.id')
                    ->get(['terminals.id', 'fullname', 'phone_number',
                          'email', 'mac_addres', 'ip_addres', 'user_agent', 'terminals.updated_at AS lastCon'
                    ]);

        return view("admin.user.users",[
            'userTerminal' => $userTerminal
        ]);
    }

    public function getUsers()
    {
        return view("admin.user.index");
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
            'username' => 'required',
            'email' => 'email',
            'psw' => 'required'
        ]);

        try {
            User::create([
                'fullname' => $request->username,
                'phone_number' => $request->phonecode,
                'email' => $request->email,
                'password' => Hash::make($request->psw),
                'town'=> $request->ville
                ]);

        } catch (\Exception $ex) {
           if((\str_starts_with($ex,
                                "PDOException: SQLSTATE[23000]: Integrity constraint violation"))
                                && \str_contains($ex, "users_email_unique"))
           {
            Flashy::error("Cette adresse mail est déjà utilisée par un autre utilisateur");
            return redirect()->back();
           }
           elseif((\str_starts_with($ex,
                                "PDOException: SQLSTATE[23000]: Integrity constraint violation"))
                                && \str_contains($ex, "users_phone_number_unique"))
           {
            Flashy::error("Ce numéro de téléphone est déjà utilisé par un autre utilisateur");
            return redirect()->back();
           }
        }


        if(auth()->attempt([
            'password' => $request->psw,
            'email' => $request->email,
        ], $request->remember)){

            $subject = "Mcs Notification";
            $body = "Merci de faire confiance à Mcs Group";
            $email_data = [
                'recipient' => 'philippembambi413@gmail.com',
                'fromEmail' => $request->email,
                'fromName' => $request->username,
                'subject' => $subject,
                'body' => $body
            ];
            \Mail::send('email-template', $email_data, function($message) use ($email_data){
                $message->to($email_data['recipient'])
                        ->from($email_data['fromEmail'], $email_data['fromName'])
                        ->subject($email_data['$subject']);
            });

            Flashy::success("Merci ".$request->username." de nous avoir rejoint !");
            return redirect()->route('index');
        }

/*
        		if (Auth::attempt($credentials, $request->remember)) {
			$request->session()->regenerate();
*/

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

            Flashy::success('Vous êtes actuellement connecté');
            return redirect()->route('index');
		}
        Flashy::error("Erreur de connexion !");
		return back()->with('status', 'Numéro de téléphone ou Mot de passe incorrects');
	}

    public function logout() {

        auth()->logout();

        $towns_and_countries = DB::table('towns')
        ->leftJoin('countries', 'towns.country_id', '=', 'countries.id')
        ->orderBy('towns.country_id')
        ->get();

        Flashy::primary("Vous êtes actuellement déconnecté !");
		return view('user.authentications', ['towns_and_countries' => $towns_and_countries]);
//        return redirect()->route('login');
    }

}
