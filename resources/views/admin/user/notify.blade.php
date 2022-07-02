@extends('admin.app')

@section('content')

<div class="page-wrapper">

    <div class="row page-titles">
        <div class="col-md-5 col-12 align-self-center">
            <ol class="breadcrumb mb-0 p-0 bg-transparent">
                <li class="breadcrumb-item"><a href="">Mcs</a></li>
                <li class="breadcrumb-item active">Ecrire un mail au client <a href="#">{{ $userInfo[0]->fullname  }}</a></li>
            </ol>

        </div>

    </div>


    <div class="container-fluid">

    <form action="{{    route("backoffice.user.notified")     }}" method="POST">
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
                                <label for="tag" class="col-sm-3 control-label">Code de la commande*</label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-tag"></i></span></div>
                                        <input
                                                type="text"
                                                name="code"
                                                class="form-control @error('code') has-error @enderror"
                                                id="code"
                                                placeholder=""
                                                value="{{   $userInfo[0]->code_purchase  }}">
                                    </div>

                                    @error('code')
                                    <span class="help-block" style="color: red;"></span>
                                    @enderror

                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email" class="col-sm-3 control-label">Email*</label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-tag"></i></span></div>
                                        <input
                                                type="text"
                                                name="email"
                                                class="form-control @error('email') has-error @enderror"
                                                id="email"
                                                placeholder=""
                                                value="{{   $userInfo[0]->email  }}">
                                    </div>

                                    @error('email')
                                    <span class="help-block" style="color: red;"></span>
                                    @enderror

                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="title" class="col-sm-3 control-label">Titre du message*</label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-tag"></i></span></div>
                                        <input
                                                type="text"
                                                name="title"
                                                class="form-control @error('title') has-error @enderror"
                                                id="title"
                                                placeholder=""

                                                value="">
                                    </div>

                                    @error('title')
                                    <span class="help-block" style="color: red;"></span>
                                    @enderror

                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="description" class="col-sm-3 control-label">Message</label>
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
