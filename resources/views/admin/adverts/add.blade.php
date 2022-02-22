@extends('admin.app')

@section('content')

<div class="page-wrapper">

    <div class="row page-titles">
        <div class="col-md-5 col-12 align-self-center">
            <ol class="breadcrumb mb-0 p-0 bg-transparent">
                <li class="breadcrumb-item"><a href="">Mcs</a></li>
                <li class="breadcrumb-item active">Ajouter une publicité</li>
            </ol>

        </div>

    </div>


    <div class="container-fluid">

    <form action="{{    route("management.adverts.add")     }}" method="POST" enctype="multipart/form-data">
        @csrf

        @if (session('status'))
        <div class="text-red-500"><i class="fa fa-warning"></i> {{ session('status') }}</div>
        @endif

        <div class="row">

            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="form-horizontal pt-3">

                            <div class="form-group row">
                                <label for="tag" class="col-sm-3 control-label">&Eacute;tiquette*</label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-tag"></i></span></div>
                                        <input
                                                type="text"
                                                name="tag"
                                                class="form-control @error('tag') has-error @enderror"
                                                id="tag"
                                                placeholder=""
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
                                            @if ($categories->count() > 0)
                                                @foreach ($categories as $category)
                                                    <option value="{{ $category->id }}">{{ $category->label }}</option>
                                                @endforeach
                                            @endif
                                    </select>


                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="description" class="col-sm-3 control-label">Description</label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-tag"></i></span></div>
                                        <textarea
                                        name="description"
                                        id="description" cols="30" rows="4"
                                        class="form-control @error('description') has-error @enderror">
                                        {{   old('description')   }}
                                    </textarea>
                                    </div>

                                    @error('description')
                                    <span class="help-block" style="color: red;">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>



                            <div class="form-group row">
                                <label for="image1" class="col-sm-3 control-label">Image 3</label>
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
