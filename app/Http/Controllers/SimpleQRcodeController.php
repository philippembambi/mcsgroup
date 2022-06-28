<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class SimpleQRcodeController extends Controller
{
     public function generate () {

    	# 2. On génère un QR code de taille 200 x 200 px
    	$qrcode = QrCode::size(200)->format('svg')->generate("Je suis un QR Code", 'qr-codes/test.svg');
        # 3. On envoie le QR code généré à la vue "simple-qrcode"
    	return view("layouts.QRcode.display", compact('qrcode'));
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        QrCode::size(200)->generate("Je suis un QR Code", '../public/codes-qr/texte.svg');
        $qrcode = Qrcode::size(200)->generate("https://www.akilischool.com");
        // Un e-mail avec destinataire, sujet et message
        $qrcode = QrCode::size(200)->email("info@akilischool.com", "Salutations", "Bonjour Akili School ! Quoi de neuf ?");
        $qrcode = QrCode::size(200)->generate("mailto:info@akilischool.com");
        $qrcode = QrCode::size(200)->geo(-4.308904, 15.302172);
        $qrcode = QrCode::size(200)->phoneNumber("+243811111111");
        $qrcode = QrCode::size(200)->generate("tel:+243811111111");
        $qrcode = QrCode::size(200)->SMS("+243811111111", "Hello World !");
        $qrcode = QrCode::wiFi([
            'encryption' => 'WPA', // Cryptage "WPA" ou "WEP"
            'ssid' => 'Akili School', // Nom du réseau WiFi
            'password' => 'Emilie-9876543210.', // Clé de sécurité
            'hidden' => 'false' // Si le réseau WiFi est masqué "true" ou non "false"
        ]);
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
