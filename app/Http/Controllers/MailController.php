<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
use App\Mail\SignupMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $details = [
            'title' => "Mail from MCS Group",
            'body' => 'Just to test this functionnality'
        ];

        Mail::to(auth()->user()->email)->send(new TestMail($details));
        return "Email sent";
    }

    public function signUp()
    {
        $details = [
            'title' => "Nouveau compte Mcs",
            'body' => "Vous venez de créer un compte sur le site www.group-mcs.com vous permettant de bénéficier des services numériques divers notamment l'achats des consommables informatiques. Merci de nous rejoindre !"
        ];

        Mail::to(auth()->user()->email)->send(new SignupMail($details));
        Flashy::success("Votre compte a été créé avec succès !");
        return redirect()->route('home');
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
