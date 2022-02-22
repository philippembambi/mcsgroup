@extends('admin.app')

@section('content')

<div class="page-wrapper">

    <div class="row page-titles">
        <div class="col-md-5 col-12 align-self-center">
            <ol class="breadcrumb mb-0 p-0 bg-transparent">
                <li class="breadcrumb-item"><a href="">Mcs Group</a></li>
                <li class="breadcrumb-item active">Opérations récentes</li>
            </ol>

        </div>

    </div>

    <div class="container-fluid">

        <div class="container-fluid note-has-grid">
            <ul class="nav nav-pills p-3 bg-white mb-3 rounded-pill align-items-center">
                         <li class="nav-item">
                             <a href="javascript:void(0)" class="nav-link rounded-pill note-link d-flex align-items-center active px-2 px-md-3 mr-0 mr-md-2"  id="achats">
                                <i class="fa fa-shopping-basket"></i> &nbsp;&nbsp;
                                <span class="d-none d-md-block">
                                    Achats
                                </span>
                            </a>
                         </li>
                         <li class="nav-item"> <a href="javascript:void(0)" class="nav-link rounded-pill note-link d-flex align-items-center px-2 px-md-3 mr-0 mr-md-2" id="panier">
                           <i class="fa fa-shopping-bag"></i> &nbsp;&nbsp;
                           <span class="d-none d-md-block"> Paniers
                               </span>
                            </a>
                         </li>
                         <li class="nav-item"> <a href="javascript:void(0)" class="nav-link rounded-pill note-link d-flex align-items-center px-2 px-md-3 mr-0 mr-md-2" id="commande">
                           <i class="fa fa-shopping-cart"></i> &nbsp;&nbsp;
                           <span class="d-none d-md-block"> Commandes
                            </span>
                            </a>
                         </li>

                        <li class="nav-item"> <a href="javascript:void(0)" class="nav-link rounded-pill note-link d-flex align-items-center px-2 px-md-3 mr-0 mr-md-2" id="feedback">
                           <i class="fa fa-bell"></i>&nbsp;&nbsp;
                           <span class="d-none d-md-block"> FeedBack
                               </span></a>
                         </li>

                         <li class="nav-item"> <a href="javascript:void(0)" class="nav-link rounded-pill note-link d-flex align-items-center px-2 px-md-3 mr-0 mr-md-2" id="note-important">
                           <i class="icon-tag mr-1"></i><span class="d-none d-md-block"> Autres articles</span></a>
                         </li>

                         <li class="nav-item ml-auto"> <a href="javascript:void(0)" class="nav-link btn-primary rounded-pill d-flex align-items-center px-3" id="add-notes">
                           <i class="fa fa-tag"></i><span class="d-none d-md-block font-14"> 134 articles</span></a>
                         </li>
               </ul>

               <div class="tab-content">
                   <div  id="note-full-container" class="note-has-grid row">

                    @if ($purchases->count() > 0)
                    @foreach ($purchases as $purchase)

                        <div class="col-lg-4 col-md-4 col-sm-4 single-note-item achats">
                            <div class="card card-body">
                                <span class="side-stick"></span>
                                <h5 class="note-title text-truncate w-75 mb-0" data-noteHeading="Book a Ticket for Movie">{{ $purchase->tag }} <i class="point fas fa-circle ml-1 font-10" style="color: rgb(14, 186, 192);"></i></h5>
                                <b class="note-date font-12 text-muted">Date de commande : {{ $purchase->date_cmd }}</b>
                                <b class="note-date font-12 text-muted">Date de validation : {{ $purchase->date_validation }}</b>
                                <div class="note-content">

                                    <img src="{{ asset("uploadedFiles/$purchase->picture_1") }}" class="img-thumbnail" alt="" style="width: 60%; height: 100px;">
                                            <p class="note-inner-content text-muted" data-noteContent="Blandit tempus porttitor aasfs. Integer posuere erat a ante venenatis.">
                                                <ul style="list-style-type: square;">
                                                    <li>
                                                        Livraison : {{ $purchase->delivery_mode }}
                                                    </li>

                                                    <li>
                                                        Mode de paiement : {{ $purchase->payment_mode=="espece"?"En espèce":"Par carte crédit"}}
                                                    </li>
                                                    <li>
                                                        Quantité : {{ $purchase->quantity }}
                                                    </li>
                                                </ul>
                                            </p>
                                      </div>

                                      <div class="d-flex align-items-center">
                                        <span class="mr-1"><i class="far fa-star favourite-note"></i></span>
                                        <span class="mr-1"><i class="far fa-trash-alt remove-note"></i></span>
                                        <div class="ml-auto">
                                            <div class="category-selector btn-group">
                                                        <a class="nav-link dropdown-toggle category-dropdown label-group p-0" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="true">
                                                            <div class="category">
                                                                <div class="category-business"></div>
                                                                <div class="category-social"></div>
                                                                <div class="category-important"></div>
                                                                <span class="more-options text-dark"><i class="icon-options-vertical"></i></span>
                                                            </div>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-right category-menu">
                                                            <a class="note-business badge-group-item badge-business dropdown-item position-relative category-business text-success" href="javascript:void(0);"><i class="fa fa-trash mr-1"></i>Supprimer définitivement</a>
                                                            <a class="note-social badge-group-item badge-social dropdown-item position-relative category-social text-info" href="javascript:void(0);"><i class="fa fa-envelope mr-1"></i> &Eacute;crire au client</a>
                                                    </div>
                                                </div>
                                        </div>
                                      </div>
                            </div>
                        </div>


                    @endforeach

                    @endif


                    @if ($basket->count() > 0)
                    @foreach ($basket as $item)

                        <div class="col-lg-4 col-md-4 col-sm-4 single-note-item panier">
                            <div class="card card-body">
                                <span class="side-stick"></span>
                                <h5 class="note-title text-truncate w-75 mb-0" data-noteHeading="Book a Ticket for Movie">{{ $item->tag }} <i class="point fas fa-circle ml-1 font-10"></i></h5>
                                <b class="note-date font-12 text-muted">Date de reservation : {{ $item->date_panier }}</b>
                                <b class="note-date font-12 text-muted">Client : {{ $item->fullname }} </b>
                                <b class="note-date font-12 text-muted">tél : {{ $item->phone_number }}</b>

                                <div class="note-content">

                                    <img src="{{ asset("uploadedFiles/$item->picture_1") }}" class="img-thumbnail" alt="" style="width: 60%; height: 100px;">
                                </div>

                                      <div class="d-flex align-items-center">
                                        <span class="mr-1"><i class="far fa-trash-alt remove-note"></i></span>
                                        <div class="ml-auto">
                                            <div class="category-selector btn-group">
                                                        <a class="nav-link dropdown-toggle category-dropdown label-group p-0" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="true">
                                                            <div class="category">
                                                                <div class="category-business"></div>
                                                                <div class="category-social"></div>
                                                                <div class="category-important"></div>
                                                                <span class="more-options text-dark"><i class="icon-options-vertical"></i></span>
                                                            </div>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-right category-menu">
                                                            <a class="note-business badge-group-item badge-business dropdown-item position-relative category-business text-success" href="javascript:void(0);"><i class="fa fa-trash mr-1"></i>Supprimer définitivement</a>
                                                            <a class="note-social badge-group-item badge-social dropdown-item position-relative category-social text-info" href="javascript:void(0);"><i class="fa fa-envelope mr-1"></i> &Eacute;crire au client</a>
                                                    </div>
                                                </div>
                                        </div>
                                      </div>
                            </div>
                        </div>


                    @endforeach

                    @endif

                    <div class="col-md-12 col-lg-12 feedback">
                        <iframe src="{{ route("feedback")}}" frameborder="0" style="width: 100%;height: 600px;"></iframe>
                    </div>

                    <div class="col-md-9 col-lg-9 commande">
                        <div class="card">
                            <div class="card-header bg-info">
                                <h5 class="mb-0 text-white">{{$cmd->count()}} Commandes en cours</h5>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table product-overview">
                                        <thead>
                                            <tr>
                                                <th>Image</th>
                                                <th>Mode de paiment</th>
                                                <th>Mode de livraison</th>
                                                <th>Date commande</th>
                                                <th style="text-align:center">Quantité</th>
                                                <th style="text-align:center">Prix total</th>
                                                <th style="text-align:center">Valider</th>
                                                <th style="text-align: center;">Supprimer</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if ($cmd->count() > 0)
                                                @foreach ($cmd as $item)
                                                <tr>
                                                    <td width="150"><img src="{{ asset("uploadedFiles/$item->picture_1") }}" alt="iMac" width="80"></td>
                                                    <td>
                                                       {{$item->payment_mode=="espece"?"En espèce":"Par carte de crédit" }}
                                                    </td>
                                                    <td>{{ $item->delivery_mode=="Adomicile"?"A domicile":"Via nos points de vente" }}</td>
                                                    <td width="70">
                                                        {{ $item->date_cmd}}
                                                    </td>
                                                    <td width="80">{{ $item->quantity }}</td>
                                                    <td width="150" align="center" class="font-500">{{ $item->total_price }} $</td>
                                                    <td align="center">

                                                        <form action="{{ route('management.purchase') }}" method="post">
                                                            @csrf
                                                                <input type="hidden" name="purchase_id" value="{{$item->purchase_id}}">
                                                            <button class="btn btn-success">
                                                                <i class="fa fa-check-square fa-2x"></i>
                                                            </button>

                                                        </form>
                                                    </td>

                                                    <td align="center">
                                                        <a href="javascript:void(0)" class="text-inverse" title="" data-toggle="tooltip" data-original-title="Supprimer">
                                                            <button class="btn btn-danger">
                                                                <i class="fa fa-trash fa-2x"></i>
                                                            </button>
                                                        </a>
                                                    </td>

                                                </tr>
                                                @endforeach
                                            @endif

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <div class="col-md-3 col-lg-3 commande">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">CART SUMMARY</h5>
                                <hr>
                                <small>Total Price</small>
                                <h2>$612</h2>
                                <hr>
                                <button class="btn btn-success">Checkout</button>
                                <button class="btn btn-secondary btn-outline">Cancel</button>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">For Any Support</h5>
                                <hr>
                                <h4><i class="ti-mobile"></i> 9998979695 (Toll Free)</h4> <small>Please contact with us if you have any questions. We are avalible 24h.</small>
                            </div>
                        </div>
                    </div>

                      </div>
                     </div>

       </div>

        <!-- Row -->
    </div>
    </div>

    @include('admin.components.settings')

@endsection
