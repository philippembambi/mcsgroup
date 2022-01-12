@extends('admin.app')

@section('content')

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

<form action="" method="POST">
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
                        <label for="name" class="col-sm-3 control-label">Libellé*</label>
                        <div class="col-sm-9">
                            <div class="input-group">
                                <div class="input-group-prepend"><span class="input-group-text"><i class="ti-user"></i></span></div>
                                <input
                                        type="text"
                                        name="tag"
                                        class="form-control @error('tag') has-error @enderror"
                                        id="name"
                                        placeholder="Entrer votre nom complet ..."
                                        value="{{   old('tag')   }}">
                            </div>

                            @error('tag')
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
                                    id="select2-with-icons"
                                    style="width: 100%; height:36px;"
                                    name="category">
                                    <option value="Célibataire">Consommable informatique</option>
                                    <option value="Marié (e)">Article d'habillement</option>
                                    <option value="Autre">Service</option>
                            </select>


                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="birthplace" class="col-sm-3 control-label">Prix unitaire</label>
                        <div class="col-sm-9">
                            <div class="input-group">
                                <div class="input-group-prepend"><span class="input-group-text"><i class="ti-home"></i></span></div>
                                <input
                                        type="text"
                                        name="price"
                                        class="form-control @error('price') has-error @enderror"
                                        id="birthplace"
                                        placeholder=""
                                        value="{{   old('price')   }}">
                            </div>

                            @error('price')
							<span class="help-block" style="color: red;">{{ $message }}</span>
							@enderror

                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="storingDate" class="col-sm-3 control-label">Date d'entrée en stock'*</label>
                        <div class="col-sm-9">
                            <div class="input-group">
                                <div class="input-group-prepend"><span class="input-group-text"><i class="mdi mdi-clock"></i></span></div>
                                <input type="date"
                                       name="birth_date"
                                       id="storingDate"
                                       placeholder=""
                                       class="form-control @error('birth_date') has-error @enderror"
                                       value="{{   old('birth_date')   }}">
                            </div>

                            @error('birth_date')
							<span class="help-block" style="color: red;">{{ $message }}</span>
							@enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="category" class="col-sm-3 control-label">Etat civil*</label>
                        <div class="col-sm-9">

                            <select
                                    data-placeholder="Selectionner un état civil..."
                                    class="select2-with-icons form-control"
                                    id="select2-with-icons"
                                    style="width: 100%; height:36px;"
                                    name="category">
                                    <option value="Célibataire">Célibataire</option>
                                    <option value="Marié (e)">Marié (e)</option>
                                    <option value="Autre">Autre</option>
                            </select>


                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="phone" class="col-sm-3 control-label">Téléphone</label>
                        <div class="col-sm-9">
                            <div class="input-group">
                                <div class="input-group-prepend"><span class="input-group-text"><i class="mdi mdi-phone"></i></span></div>
                                <input
                                        type="text"
                                        class="form-control @error('phone') has-error @enderror"
                                        value="{{   old('phone')   }}"
                                        id="phone"
                                        name="phone" placeholder="">
                            </div>

                            @error('phone')
							<span class="help-block" style="color: red;">{{ $message }}</span>
							@enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="email" class="col-sm-3 control-label">Email</label>
                        <div class="col-sm-9">
                            <div class="input-group">
                                <div class="input-group-prepend"><span class="input-group-text"><i class="ti-email"></i></span></div>
                                <input
                                            type="email"
                                            name="email"
                                            class="form-control @error('email') has-error @enderror"
                                            value="{{   old('email')   }}"
                                            id="email"
                                            placeholder="Entrer une adresse mail">
                            </div>

                            @error('email')
							<span class="help-block" style="color: red;">{{ $message }}</span>
							@enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-3 control-label">Commune</label>
                        <div class="col-sm-9">

                                     <select
                                                data-placeholder="Selectionner une commune..."
                                                class="select2-with-icons form-control"
                                                id="select2-with-icons"
                                                style="width: 100%; height:36px;"
                                                name="commune">

                                        <optgroup label="TSHANGU">
                                            <option value="NSELE">NSELE</option>
                                            <option value="KIMBASEKE">KIMBASEKE</option>
                                            <option value="MASINA">MASINA</option>
                                            <option value="NDJILI">NDJILI</option>
                                        </optgroup>
                                        <optgroup label="MONT-AMBA">
                                            <option value="LEMBA">LEMBA</option>
                                            <option value="NGABA">NGABA</option>
                                            <option value="MAKALA">MAKALA</option>
                                            <option value="MONT-NGAFULA">MONT-NGAFULA</option>
                                            <option value="KINSESO">KINSESO</option>
                                            <option value="MATETE">MATETE</option>

                                        </optgroup>
                                        <optgroup label="FUNA">
                                            <option value="KASA-VUBU">KASA-VUBU</option>
                                            <option value="GOMBE">GOMBE</option>
                                            <option value="LINGWALA">LINGWALA</option>
                                            <option value="SELEMBAO">SELEMBAO</option>
                                            <option value="BARUMBU">BARUMBU</option>
                                        </optgroup>
                                        <optgroup label="FUNA">
                                            <option value="LIMETE">LIMETE</option>
                                            <option value="BUMBU">BUMBU</option>
                                            <option value="NGIRI-NGIRI">NGIRI-NGIRI</option>
                                        </optgroup>
                                        <optgroup label="LUKUNGA">
                                            <option value="KINTAMBO">KINTAMBO</option>
                                            <option value="BANDALUNGWA">BANDALUNGWA</option>
                                            <option value="NGALIEMA">NGALIEMA</option>
                                        </optgroup>
                                    </select>


                        </div>
                    </div>


                    <div class="form-group row">
                        <label for="full_adress" class="col-sm-3 control-label">Adresse complète</label>
                        <div class="col-sm-9">
                            <div class="input-group">
                                <div class="input-group-prepend"><span class="input-group-text"><i class="ti-home"></i></span></div>
                                <input
                                        type="text"
                                        class="form-control @error('full_adress') has-error @enderror"
                                        value="{{   old('full_adress')   }}"
                                        id="full_adress"
                                        placeholder="Quartier / Avenue / Numéro"
                                        name="full_adress">
                            </div>

                            @error('full_adress')
							<span class="help-block" style="color: red;">{{ $message }}</span>
							@enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="email4" class="col-sm-3 control-label">Epingler une photo</label>
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
                                            name="picture">
                                    <label class="custom-file-label" for="">Choisir une image</label>
                                </div>
                            </div>

                            @error('picture')
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
                <h4 class="card-title">Informations relatives au membre</h4>
                <h6 class="card-subtitle">(*) Champs requis</h6>
                <div class="form-horizontal pt-3">

                    <div class="form-group row">
                        <label for="email2" class="col-sm-3 control-label">Commune politique*</label>
                        <div class="col-sm-9">

                            <select
                                    data-placeholder="..."
                                    class="select2-with-icons form-control"
                                    id="select2-with-icons"
                                    style="width: 100%; height:36px;"
                                    name="id_commune_politique">
                                <option value="1">LOREM</option>
                                <option value="2">LOREM</option>
                                <option value="3">IPSUM</option>
                                <option value="4">IPSUM</option>
                            </select>

                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="web10" class="col-sm-3 control-label">Fonction*</label>
                        <div class="col-sm-9">

                            <select
                                    data-placeholder="..."
                                    class="select2-with-icons form-control"
                                    id="select2-with-icons"
                                    style="width: 100%; height:36px;"
                                    name="member_function">
                                <option value="LIVULU">Président</option>
                                <option value="MBAZAL">LOREM</option>
                                <option value="FUNA">IPSUM</option>
                                <option value="LUKUNGA">IPSUM</option>
                            </select>

                        </div>
                    </div>
                    <hr>
                    <h4 class="card-title">Compétences et expériences professionnelle</h4>
                    <h6 class="card-subtitle">Facultatives</h6>
                    <div class="form-group row">
                        <label for="domaine" class="col-sm-3 control-label">Domaines d'études</label>
                        <div class="col-sm-9">
                            <div class="input-group">
                                <input
                                        type="text"
                                        class="form-control @error('study_domain') has-error @enderror"
                                        value="{{   old('study_domain')   }}"
                                        id="study_domain"
                                        name="study_domain" placeholder="">
                                <div class="input-group-append"><span class="input-group-text"><i class="fas fa-graduation-cap"></i></span></div>
                            </div>

                            @error('study_domain')
							<span class="help-block" style="color: red;">{{ $message }}</span>
							@enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="diploma" class="col-sm-3 control-label">Diplôme</label>
                        <div class="col-sm-9">
                            <div class="input-group">
                                <input type="text"
                                       class="form-control @error('diploma') has-error @enderror"
                                       value="{{   old('diploma')   }}"
                                       id="diploma"
                                       name="diploma" placeholder="">
                                <div class="input-group-append"><span class="input-group-text"><i class="mdi mdi-file"></i></span></div>
                            </div>

                            @error('diploma')
							<span class="help-block" style="color: red;">{{ $message }}</span>
							@enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="entreprise" class="col-sm-3 control-label">Entreprise</label>
                        <div class="col-sm-9">
                            <div class="input-group">
                                <input
                                        type="text"
                                        class="form-control @error('entreprise') has-error @enderror"
                                        value="{{   old('entreprise')   }}"
                                        id="entreprise"
                                        name="entreprise" placeholder="">
                                <div class="input-group-append"><span class="input-group-text"><i class="fas fa-university"></i></span></div>
                            </div>

                            @error('entreprise')
							<span class="help-block" style="color: red;">{{ $message }}</span>
							@enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="email4" class="col-sm-3 control-label">Annexer un CV</label>
                        <div class="col-sm-9">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-folder-open"></i></span>
                                </div>
                                <div class="custom-file">
                                    <input type="file"
                                           class="custom-file-input"
                                           id="inputGroupFile01"
                                           name="resume">
                                    <label class="custom-file-label" for="inputGroupFile01">Importer un CV</label>
                                </div>
                            </div>

                            @error('resume')
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