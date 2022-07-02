<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\FeedBack;
use Flashy;
use DB;

class FeedBackController extends Controller
{
    public function __invoke()
    {
//        $feedback = FeedBack::all();
        $feedback = DB::table("feed_backs")
        ->leftJoin('users', 'users.id', '=', 'feed_backs.user_id')
        ->orderBy("feed_backs.id", "DESC")
        ->limit(20)
        ->get(['fullname', 'feed_backs.created_at', 'content', 'feed_backs.id AS id_feedback']);
        
        return view("admin.feedback", [
            'feedback' => $feedback
        ]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("layouts.feedback.index");
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
           FeedBack::create([
                'user_id' => isset(auth()->user()->id)?auth()->user()->id:0,
                'content' => $request->content,
                'objet' => isset($request->objet)?$request->objet:"News letter",
                'service' => isset($request->service)?$request->service:""
            ]);

            Flashy::success("Votre demande a été envoyée avec succès !");
            return redirect()->back();

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
        DB::insert("DELETE FROM feed_backs WHERE id = $id");
        Flashy::success("Vous venez de supprimer un message");
        return redirect()->back();
    }
}
