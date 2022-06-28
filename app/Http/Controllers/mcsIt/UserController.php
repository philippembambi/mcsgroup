<?php

namespace App\Http\Controllers\mcsIt;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use DB;
use Flashy;

class UserController extends Controller
{
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
            return redirect()->route('mcsIt.index');
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
		return view('mcsIt.layouts.user.login', ['towns_and_countries' => $towns_and_countries]);
//        return redirect()->route('login');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("mcsIt.layouts.user.login");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'username' => 'required',
            'email' => 'email',
            'password' => 'required|confirmed'
        ]);

        try {
            User::create([
                'fullname' => $request->username,
                'phone_number' => $request->phonecode,
                'email' => $request->email,
                'password' => Hash::make($request->psw),
                'town'=> "Kinshasa"
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
           else{
               dd($ex);
           }
        }


        if(auth()->attempt([
            'password' => $request->psw,
            'email' => $request->email,
        ], $request->remember)){

            /*
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
            */
            return redirect()->route('send-signupMail');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
