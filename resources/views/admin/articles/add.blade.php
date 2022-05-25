@extends('admin.app')

@section('content')

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
                <li class="breadcrumb-item active">Ajouter un produit</li>
            </ol>

        </div>

    </div>


    <div class="container-fluid">

    <form action="{{    route("management.articles.add")     }}" method="POST" enctype="multipart/form-data">
        @csrf

        @if (session('status'))
        <div class="text-red-500"><i class="fa fa-warning"></i> {{ session('status') }}</div>
        @endif

        <div class="row">

            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Nouveau produit</h4>
                        <h6 class="card-subtitle">(*) champs requis</h6>
                        <div class="form-horizontal pt-3">

                            <div class="form-group row">
                                <label for="label" class="col-sm-3 control-label">Libellé*</label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-tag"></i></span></div>
                                        <input
                                                type="text"
                                                name="label"
                                                class="form-control @error('label') has-error @enderror"
                                                id="label"
                                                placeholder=""
                                                value="{{   old('label')   }}">
                                    </div>

                                    @error('label')
                                    <span class="help-block" style="color: red;">{{ $message }}</span>
                                    @enderror

                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="category" class="col-sm-3 control-label">Categorie*</label>
                                <div class="col-sm-9">

                                    <select
                                            data-placeholder="Selectionner un état civil..."
                                            class="select2-with-icons form-control"
                                            id="select2-with-icons" onchange="appearOrdi()"
                                            style="width: 100%; height:36px;"
                                            name="category">
                                            @if ($categories->count() > 0)
                                                @foreach ($categories as $category)
                                                    <option value="{{ $category->id }}">{{ $category->label }}</option>
                                                @endforeach
                                            @endif
                                    </select>


                                </div>
                            </div>


                            <div class="form-group row" id="blocCatOrdi" style="display: none;">
                                <label for="category" class="col-sm-3 control-label">Marque Ordinateur</label>
                                <div class="col-sm-9">

                                    <select
                                            data-placeholder="Selectionner un état civil..."
                                            class="select2-with-icons form-control"
                                            id="catOrdi"
                                            style="width: 100%; height:36px;"
                                            name="MarqueOrdinateur">
                                            @if ($ordinateurs->count() > 0)
                                                @foreach ($ordinateurs as $ordinateur)
                                                    <option value="{{ $ordinateur->id_ordi }}">{{ $ordinateur->name }}</option>
                                                @endforeach
                                            @endif
                                    </select>


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
                                                value="{{   old('price')   }}">
                                    </div>

                                    @error('price')
                                    <span class="help-block" style="color: red;">{{ $message }}</span>
                                    @enderror

                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="soldprice" class="col-sm-3 control-label">Prix en solde</label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-tag"></i></span></div>
                                        <input
                                                type="text"
                                                name="soldprice"
                                                class="form-control @error('soldprice') has-error @enderror"
                                                id="soldprice"
                                                placeholder=""
                                                value="{{   old('soldprice')   }}">
                                    </div>

                                    @error('soldprice')
                                    <span class="help-block" style="color: red;">{{ $message }}</span>
                                    @enderror

                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="storingDate" class="col-sm-3 control-label">Date d'entrée en stock</label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i class="mdi mdi-clock"></i></span></div>
                                        <input type="date"
                                            name="storingDate"
                                            id="storingDate"
                                            placeholder=""
                                            class="form-control @error('storingDate') has-error @enderror"
                                            value="{{   old('storingDate')   }}">
                                    </div>

                                    @error('storingDate')
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
                                                class="form-control @error('itemNumber') has-error @enderror"
                                                value="{{   old('itemNumber')   }}"
                                                id="itemNumber"
                                                name="itemNumber" placeholder="">
                                    </div>

                                    @error('itemNumber')
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
                                                value="{{   old('disk')   }}"
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
                                                value="{{   old('pouce')   }}"
                                                id="pouce"
                                                name="pouce" placeholder="">
                                    </div>

                                    @error('pouce')
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
                                <label for="ram" class="col-sm-3 control-label">Capacité RAM</label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-tag"></i></span></div>
                                        <input
                                                type="text"
                                                class="form-control @error('ram') has-error @enderror"
                                                value="{{   old('ram')   }}"
                                                id="ram"
                                                name="ram" placeholder="">
                                    </div>

                                    @error('ram')
                                    <span class="help-block" style="color: red;">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="processeur" class="col-sm-3 control-label">Capacité Processeur</label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-tag"></i></span></div>
                                        <input
                                                type="text"
                                                class="form-control @error('processeur') has-error @enderror"
                                                value="{{   old('processeur')   }}"
                                                id="processeur"
                                                name="processeur" placeholder="">
                                    </div>

                                    @error('processeur')
                                    <span class="help-block" style="color: red;">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="description" class="col-sm-3 control-label">Description</label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <textarea
                                        name="description"
                                        id="description" cols="30" rows="4"
                                        class="form-control @error('description') has-error @enderror">
                                        {{   old('description')   }}
                                    </textarea>
                                        <div class="input-group-append"><span class="input-group-text"><i class="fas fa-edit"></i></span></div>
                                    </div>

                                    @error('description')
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
