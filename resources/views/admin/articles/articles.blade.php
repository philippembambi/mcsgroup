<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Custom styles for this template -->

  <!-- Custom styles for this page -->
  <link rel="stylesheet" href="{{ asset('css/all.css') }}">
<link rel="stylesheet" href="{{ asset('css/sb-admin-2.css') }}">
<link href="{{ asset('vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">

<script>
    function PrintDiv() {
        var divToPrint = document.getElementById('divToPrint');
        var popupWin = window.open('', '_blank', 'width=1500,height=1500');
        popupWin.document.open();
        popupWin.document.write('<html><head><link rel="stylesheet" href="./public/css/bootstrap.css"> </head><body onload="window.print()">' +
        divToPrint.innerHTML + '</body></html>');
        popupWin.document.close();
        }

</script>
</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">


    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">



          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-danger">Nos articles</h6>

              <div style="margin-left: 90%;margin-top: -3%;"><button style="height: 40px;" class="btn btn-danger" onclick="PrintDiv()()"><i class="fa fa-print"></i> &nbsp;</button></div>
            </div>
            <div class="card-body" id="">
              <div class="table-responsive">

              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>N°</th>
                      <th>Image</th>
                      <th>Libellé</th>
                      <th>Catégorie</th>
                      <th>Prix unitaire</th>
                      <th>Nombre d'exemplaire</th>
                      <th>Date de stockage</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tfoot>

                    <tr>
                        <th>N°</th>
                        <th>Image</th>
                        <th>Libellé</th>
                        <th>Catégorie</th>
                        <th>Prix unitaire</th>
                        <th>Nombre d'exemplaire</th>
                        <th>Date de stockage</th>
                        <th>Action</th>
                      </tr>
                  </tfoot>

                  <tbody>

            @if ($articles->count() > 0)
			    @foreach ($articles as $article)

                    <tr>
                      <td>{{ $article->id }} </td>
                      <td><img src="{{  asset("uploadedFiles/$article->picture_1") }}" style="height: 100px;" alt=""></td>
                      <td>{{    $article->tag    }}</td>
                      <td>{{    $article->category    }}</td>
                      <td>{{    $article->price    }}</td>
                      <td>{{    $article->nbre_exemplaire    }}</td>
                      <td>{{    $article->created_at    }}</td>
                      <td><a target="_blank" href="../adminArticle/{{ $article->id }}"><button class="btn btn-danger" style="width: 100%;"><i class="fa fa-plus"></i> Détails</button></a></td>
                    </tr>
                @endforeach
            @endif

                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

    <!-- End of Content Wrapper -->

    <div class="container" style="visibility: hidden;">


    <div class="row">


    <div class="col-md-12" id="divToPrint">

        <span style="float: left;margin-left: 1%;"><img src="{{ asset('./image/logo.png') }}" alt="" style="height: 80px;"></span>
<h3 style="text-align: center;font-weight: bolder;text-transform: uppercase;">Mcs Group</h3>
          <h4 style="text-align: center;font-weight: bolder;color: red;">Votre partenaire business</h4>
          <br>
          <div class="alert alert-danger">
          <h4 style="text-align: center;font-weight: bold;">Nos articles</h4>
        </div>

        <table class="table table-striped">
          <thead>
                    <tr>
                        <th>N°</th>
                        <th>Libellé</th>
                        <th>Catégorie</th>
                        <th>Prix unitaire</th>
                        <th>Nombre d'exemplaire</th>
                        <th>Date de stockage</th>
                        <th>Action</th>
                      </tr>
          </thead>
          <tbody>
            @if ($articles->count() > 0)
            @foreach ($articles as $article)

                <tr>
                  <td>{{    $article->id }} </td>
                  <td>{{    $article->tag    }}</td>
                  <td>{{    $article->category    }}</td>
                  <td>{{    $article->price    }}</td>
                  <td>{{    $article->nbre_exemplaire    }}</td>
                  <td>{{    $article->created_at    }}</td>
                  <td><a href="article/{{ $article->id }}"><button class="btn btn-danger" style="width: 100%;"><i class="fa fa-plus"></i> Détails</button></a></td>
                </tr>
            @endforeach
        @endif
          </tbody>
        </table>
      </div>

    </div>
    </div>
  <!-- Scroll to Top Button-->
  <!-- Bootstrap core JavaScript-->
  <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

  <!-- Core plugin JavaScript-->
  <script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>

  <!-- Custom scripts for all pages-->
  <script src="{{ asset('js/sb-admin-2.min.js') }}"></script>

  <!-- Page level plugins -->
  <script src="{{ asset('vendor/datatables/jquery.dataTables.min.js') }}"></script>
  <script src="{{ asset('vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>

  <!-- Page level custom scripts -->
  <script src="{{ asset('js/demo/datatables-demo.js') }}"></script>

</body>

</html>
