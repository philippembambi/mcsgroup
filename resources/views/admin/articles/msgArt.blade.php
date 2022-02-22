@extends('admin.app')

@section('content')

<div class="page-wrapper">

<body style="margin:0px; background: #f8f8f8; ">
    <div width="100%" style="background: #f8f8f8; padding: 0px 0px; font-family:arial; line-height:28px; height:100%;  width: 100%; color: #514d6a;">
        <div style="max-width: 700px; padding:50px 0;  margin: 0px auto; font-size: 14px;">
            <table border="0" cellpadding="0" cellspacing="0" style="width: 100%; margin-bottom: 10px">
                <tbody>
                    <tr>
                        <td style="vertical-align: top; padding-bottom:0px;" align="center"><a href="#" target="_blank">
                            <img src="{{ asset("image/USD_100px.png") }}" alt="xtreme admin" style="border:none"></a>
                        </td>
                    </tr>
                </tbody>
            </table>
            <table border="0" cellpadding="0" cellspacing="0" style="width: 100%;">
                <tbody>
                    <tr>
                        <td style="background:rgb(197, 6, 6); padding:20px; color:#fff; text-align:center;font-size: 17px">
                             Enregistrement du produit {{   $tag }} effectué avec succès
                            </td>
                    </tr>
                </tbody>
            </table>
            <div style="padding: 40px; background: #fff;">
                <table border="0" cellpadding="0" cellspacing="0" style="width: 100%;">
                    <tbody>
                        <tr>
                            <td>
                                <p>Dernière mise à jour <b> <?php  echo date("d-m-Y", time()); ?> </b></p>
                                <p>
                                  {{    $description    }}</p>
                                <center>
                                    <a href="javascript: void(0);" style="display: inline-block; padding: 11px 30px; margin: 20px 0px 30px; font-size: 15px; color: #fff; background: #4fc3f7; border-radius: 60px; text-decoration:none;">Continuer</a>
                                </center>
                                <b>Veillez confirmer cette opération</b> </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div style="text-align: center; font-size: 12px; color: #b2b2b5; margin-top: 20px">
                <p> Par Mcs Group
                </p>
            </div>
        </div>
    </div>
</body>

@include('admin.components.settings')

@endsection
