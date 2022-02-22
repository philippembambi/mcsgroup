@extends('admin.app')

@section('content')

<div class="page-wrapper">

    <div class="left-part bg-white pb-5">
        <!-- Mobile toggle button -->
        <a class="ti-menu ti-close btn btn-success show-left-part d-block d-md-none" href="javascript:void(0)"></a>
        <!-- Mobile toggle button -->
        <div class="scrollable position-relative" style="height:100%;">
            <div class="p-3">
                <h5 class="card-title" style="text-align: center;">{{    $article->tag    }}</h5>
                <img src="{{ asset("uploadedFiles/$article->picture_1") }}" style="width: 100%;height: 150px;" class="img-fluid " alt="users">
                <hr>
                <img src="{{ asset("uploadedFiles/$article->picture_2") }}" style="width: 100%;height: 150px;" class="img-fluid " alt="users">
                <hr>
                <img src="{{ asset("uploadedFiles/$article->picture_3") }}" style="width: 100%;height: 150px;" class="img-fluid " alt="users">
                <hr>
            </div>

        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Left Part  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Right Part  Mail Compose -->
    <!-- ============================================================== -->
    <div class="right-part overflow-auto">
        <div class="p-3">
            <div class="card">
                <div class="card-body">



                    <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-12">
                        <div class="row">
                            <!-- Column -->
                            <div class="col-sm-12 col-md-6">
                                <div class="card bg-success">
                                    <div class="card-body text-white">
                                        <div class="d-flex flex-row">
                                            <div class="align-self-center display-6"><i class="ti-wallet"></i></div>
                                            <div class="p-2 align-self-center">
                                                <h4 class="mb-0 text-white">Informations sur le produit</h4>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Column -->
                            <!-- Column -->
                            <div class="col-sm-12 col-md-6">
                                <div class="card bg-info">
                                    <div class="card-body text-white">
                                        <div class="d-flex flex-row">
                                            <div class="display-6 align-self-center"><i class="fa fa-shopping-bag"></i></div>
                                            <div class="p-2 align-self-center">
                                                <h4 class="mb-0 text-white">Transactions</h4>
                                                <span>TOTAL</span>
                                            </div>
                                            <div class="ml-auto align-self-center">
                                                <h2 class="font-weight-medium mb-0 text-white">90</h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Column -->

                        </div>
                        <!-- Row -->
                        <div class="row">
                            <!-- Column -->
                            <div class="col-sm-12 col-md-6">
                                <div class="card">
                                    <div class="d-flex flex-row">
                                        <div class="p-2 bg-info">
                                            <h3 class="text-white p-2 mb-0"><i class="fa fa-list"></i></h3></div>
                                        <div class="p-2">
                                            <ul>
                                                <li>
                                                    <span class="text-muted">Catégorie ::: {{$data[0]->label}}</span>
                                                </li>
                                                <li>
                                                    <span class="text-muted">Prix unitaire ::: {{$article->price}}</span>
                                                </li>
                                                <li>
                                                    <span class="text-muted">Nbre d'exemplaire ::: {{$article->nbre_exemplaire}}</span>
                                                </li>

                                                <li>
                                                    <span class="text-muted">Date d'acquisition ::: {{$article->created_at->format("d-m-Y")}}</span>
                                                </li>
                                            </ul>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Column -->
                            <!-- Column -->
                            <div class="col-sm-12 col-md-6">
                                <div class="card">
                                    <div class="d-flex flex-row">
                                        <div class="p-2 bg-success">
                                            <h3 class="text-white p-2 mb-0"><i class="fa fa-shopping-basket"></i></h3></div>
                                        <div class="p-2">
                                            <h3 class="text-success mb-0">Panier</h3>
                                            <span class="text-muted">Le nombre de réservation</span>
                                        </div>
                                        <div class="align-self-center mr-3 ml-auto">
                                            <h2 class="text-success mb-0">{{$basket->count()}}</h2>
                                        </div>
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="d-flex flex-row">
                                        <div class="p-2 bg-success">
                                            <h3 class="text-white p-2 mb-0"><i class="fa fa-shopping-cart"></i></h3></div>
                                        <div class="p-2">
                                            <h3 class="text-success mb-0">Commandes</h3>
                                            <span class="text-muted">Le nombre des commandes effectuées</span>
                                        </div>
                                        <div class="align-self-center mr-3 ml-auto">
                                            <h2 class="text-success mb-0">{{$purchases->count()}}</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Column -->

                            <!-- Column -->
                            <div class="col-sm-12 col-md-6">
                                <div class="card">
                                    <div class="d-flex flex-row">
                                        <div class="p-2 bg-inverse">
                                            <h3 class="text-white p-2 mb-0"><i class="ti-timer"></i></h3></div>
                                        <div class="p-2">
                                            <button class="btn btn-default"><i class="fa fa-edit"></i> Modifier</button>
                                        </div>
                                        <div class="align-self-center mr-3 ml-auto">
                                            <button class="btn btn-info"><i class="fa fa-trash"></i> Supprimer</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Column -->
                            <!-- Column -->
                            <div class="col-sm-12 col-md-6">
                                <div class="card">
                                    <div class="d-flex flex-row">
                                        <div class="p-2 bg-cyan">
                                            <h3 class="text-white p-2 mb-0"><i class="ti-server"></i></h3></div>
                                        <div class="p-2">
                                            <h3 class="text-cyan mb-0">Chiffre d'affaires</h3>
                                            <span class="text-muted">Montant de vente globale</span>
                                        </div>
                                        <div class="align-self-center mr-3 ml-auto">
                                            <h2 class="text-cyan mb-0">{{$chiffre_affaires}} $</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Column -->
                        </div>
                        <!-- End Row -->

                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
            </div>

                </div>
            </div>
        </div>
    </div>
        @include('admin.components.settings')

        @endsection
