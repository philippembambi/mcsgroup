@extends('admin.app')

@section('content')

@php
    $id = $article[0]->id;
@endphp

<script>
    function appearOrdi() {
        var combo = document.getElementById("select2-with-icons");

        if(combo.value == "2"){
            document.getElementById("blocCatOrdi").style.display = "flex";
        }
        else{
            document.getElementById("blocCatOrdi").style.display = "none";
        }
    }
</script>

<div class="page-wrapper">

    <div class="row page-titles">
        <div class="col-md-5 col-12 align-self-center">
            <ol class="breadcrumb mb-0 p-0 bg-transparent">
                <li class="breadcrumb-item"><a href="">Mcs</a></li>
            <li class="breadcrumb-item active">Modifier le produit <a href="{{  url("backoffice/adminArticle/$id")   }}">{{  $article[0]->tag }}</a></li>
            </ol>

        </div>

    </div>


    <div class="container-fluid">

    <form action="{{    route("backoffice.article.update")     }}" method="POST" enctype="multipart/form-data">
        @csrf

    <input type="hidden" name="id" value="{{ $article[0]->id }}">
        @if (session('status'))
        <div class="text-red-500"><i class="fa fa-warning"></i> {{ session('status') }}</div>
        @endif

        <div class="row">

            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Modifier le produit</h4>
                        <h6 class="card-subtitle">(*) champs requis</h6>
                        <div class="form-horizontal pt-3">

                            <div class="form-group row">
                                <label for="tag" class="col-sm-3 control-label">Libellé*</label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-tag"></i></span></div>
                                        <input
                                                type="text"
                                                name="tag"
                                                class="form-control @error('tag') has-error @enderror"
                                                id="tag"
                                                placeholder=""
                                                value="{{  $article[0]->tag }}">
                                    </div>

                                    @error('tag')
                                    <span class="help-block" style="color: red;">{{ $message }}</span>
                                    @enderror

                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="price" class="col-sm-3 control-label">Prix unitaire</label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-tag"></i></span></div>
                                        <input
                                                type="text"
                                                name="price"
                                                class="form-control @error('price') has-error @enderror"
                                                id="price"
                                                placeholder=""
                                                value="{{  $article[0]->price }}">
                                    </div>

                                    @error('price')
                                    <span class="help-block" style="color: red;">{{ $message }}</span>
                                    @enderror

                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="solde_price" class="col-sm-3 control-label">Prix en solde</label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-tag"></i></span></div>
                                        <input
                                                type="text"
                                                name="solde_price"
                                                class="form-control @error('solde_price') has-error @enderror"
                                                id="solde_price"
                                                placeholder=""
                                                value="{{  $article[0]->solde_price }}">
                                    </div>

                                    @error('solde_price')
                                    <span class="help-block" style="color: red;">{{ $message }}</span>
                                    @enderror

                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="itemNumber" class="col-sm-3 control-label">Nombre d'exemplaire</label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-tag"></i></span></div>
                                        <input
                                                type="text"
                                                class="form-control @error('nbre_exemplaire') has-error @enderror"
                                                value="{{  $article[0]->nbre_exemplaire }}"
                                                id="nbre_exemplaire"
                                                name="nbre_exemplaire" placeholder="">
                                    </div>

                                    @error('nbre_exemplaire')
                                    <span class="help-block" style="color: red;">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="disk" class="col-sm-3 control-label">Capacité disque dur</label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-tag"></i></span></div>
                                        <input
                                                type="text"
                                                class="form-control @error('disk') has-error @enderror"
                                                value="{{  $article[0]->disk }}"
                                                id="disk"
                                                name="disk" placeholder="">
                                    </div>

                                    @error('disk')
                                    <span class="help-block" style="color: red;">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="pouce" class="col-sm-3 control-label">Taille écran en pouce</label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-tag"></i></span></div>
                                        <input
                                                type="text"
                                                class="form-control @error('pouce') has-error @enderror"
                                                value="{{  $article[0]->pouce }}"
                                                id="pouce"
                                                name="pouce" placeholder="">
                                    </div>

                                    @error('pouce')
                                    <span class="help-block" style="color: red;">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                    <label for="ram" class="col-sm-3 control-label">Capacité RAM</label>
                                    <div class="col-sm-9">
                                        <div class="input-group">
                                            <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-tag"></i></span></div>
                                            <input
                                                    type="text"
                                                    class="form-control @error('ram') has-error @enderror"
                                                    value="{{  $article[0]->ram }}"
                                                    id="ram"
                                                    name="ram" placeholder="">
                                        </div>
    
                                        @error('ram')
                                        <span class="help-block" style="color: red;">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
    

                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <div class="form-horizontal pt-3">

                                <div class="form-group row">
                                        <label for="processeur" class="col-sm-3 control-label">Capacité Processeur</label>
                                        <div class="col-sm-9">
                                            <div class="input-group">
                                                <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-tag"></i></span></div>
                                                <input
                                                        type="text"
                                                        class="form-control @error('processeur') has-error @enderror"
                                                        value="{{  $article[0]->processor }}"
                                                        id="processeur"
                                                        name="processor" placeholder="">
                                            </div>
        
                                            @error('processeur')
                                            <span class="help-block" style="color: red;">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    

                            <div class="form-group row">
                                <label for="desc" class="col-sm-3 control-label">Description</label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                    <textarea
                                        name="desc"
                                        id="desc" cols="30" rows="4"
                                        class="form-control @error('desc') has-error @enderror">
                                        {{  $article[0]->desc }}
                                    </textarea>
                                        <div class="input-group-append"><span class="input-group-text"><i class="fas fa-edit"></i></span></div>
                                    </div>
                                    @error('desc')
                                    <span class="help-block" style="color: red;">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="image1" class="col-sm-3 control-label">Image 1</label>
                                <div class="col-sm-9">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="mdi mdi-image"></i></span>
                                        </div>
                                        <div class="custom-file">
                                            <input
                                                    type="file"
                                                    class="custom-file-input"
                                                    id=""
                                                    name="image1">
                                            <label class="custom-file-label" for="">Choisir une image</label>
                                        </div>
                                    </div>

                                    @error('image1')
                                    <span class="help-block" style="color: red;">{{ $message }}</span>
                                    @enderror

                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="image2" class="col-sm-3 control-label">Image 2</label>
                                <div class="col-sm-9">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="mdi mdi-image"></i></span>
                                        </div>
                                        <div class="custom-file">
                                            <input
                                                    type="file"
                                                    class="custom-file-input"
                                                    id="image2"
                                                    name="image2">
                                            <label class="custom-file-label" for="">Choisir une image</label>
                                        </div>
                                    </div>

                                    @error('image2')
                                    <span class="help-block" style="color: red;">{{ $message }}</span>
                                    @enderror

                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="image3" class="col-sm-3 control-label">Image 3</label>
                                <div class="col-sm-9">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="mdi mdi-image"></i></span>
                                        </div>
                                        <div class="custom-file">
                                            <input
                                                    type="file"
                                                    class="custom-file-input"
                                                    id=""
                                                    name="image3">
                                            <label class="custom-file-label" for="">Choisir une image</label>
                                        </div>
                                    </div>

                                    @error('image3')
                                    <span class="help-block" style="color: red;">{{ $message }}</span>
                                    @enderror

                                </div>
                            </div>

                            <hr>
                            <br>
                            <div class="form-group row mb-0">
                                <div class="offset-sm-5 col-sm-9 ">
                                    <button type="submit" style="height: 40px; width: 100px;font-weight: bold;" class="btn btn-info waves-effect waves-light"><i class="fa fa-check"></i> Valider</button>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>


        </div>
    </form>

    </div>

</div>

    @include('admin.components.settings')

@endsection
