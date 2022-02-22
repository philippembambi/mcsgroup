<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Terminal;

class TerminalController extends Controller
{
    public string $ip = "";
    public int $terminal;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if(isset(auth()->user()->id)){
              Terminal::create([
                    "id_user" => auth()->user()->id,
                    "mac_addres" => exec('getmac'),
                    "ip_addres" => $request->ip(),
                    "user_agent" => $request->server('HTTP_USER_AGENT')
                ]);
            }
        else{
             Terminal::create([
                "id_user" => 0,
                "mac_addres" => exec('getmac'),
                "ip_addres" => $request->ip(),
                "user_agent" => $request->server('HTTP_USER_AGENT')
            ]);
        }


    return response()->json(['success'=>'Mcs group user identified']);

    }

    public function getIp():string
    {
        if(!empty($_SERVER['HTTP_CLIENT_IP'])){
            $this->ip = $_SERVER['HTTP_CLIENT_IP'];
        }
        elseif(!empty($_SERVER['HTTP_FORWARDED_FOR'])){
            $this->ip = $_SERVER['HTTP_FORWARDED_FOR'];
        }
        elseif(!empty($_SERVER['HTTP_X_CLUSTER_CLIENT_IP'])){
            $this->ip = $_SERVER['HTTP_X_CLUSTER_CLIENT_IP'];
        }
        return $this->ip;
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
