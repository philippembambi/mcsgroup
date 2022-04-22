<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Flashy;

class SocialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function redirectFacebook()
    {
        return Socialite::driver('facebook')->stateless()->redirect();
    }

    public function callbackFacebook()
    {
        try {
            $facebookUser = Socialite::driver('facebook')->stateless()->user();
            $findUser = User::where('fb_id', $facebookUser->id)->first();
            #dd($facebookUser);
            if($findUser)
            {
                Auth::login($findUser);
                Flashy::error("Facebook user created successfully");
                return redirect()->route('index');
            }
            else{
                $newUser =  User::create([
                    'fullname' => $facebookUser->name,
                    'phone_number' => "+243813456932",
                    'email' => $facebookUser->email,
                    'password' => Hash::make($facebookUser->name),
                    'fb_id'=> $facebookUser->id
                    ]);
                    //Auth::login($findUser);

                    if(auth()->attempt([
                        'password' => Hash::make($facebookUser->name),
                        'email' => $facebookUser->email,
                    ])){

                        Flashy::success("Facebook user created successfully");
                        return redirect()->route('index');
                    }
                    else{
                        Flashy::error("Facebook Error user encountered");
                        return redirect()->route('index');
                    }



            }

        } catch (Execption $e) {

            dd($e->getMessage());
        }
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
        //
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
