<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="{{ asset('admin/assets/libs/chartist/dist/chartist.min.css') }}">
      <link rel="stylesheet" href="{{ asset('admin/assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.css') }}">
      <link rel="stylesheet" href="{{ asset('admin/dist/js/pages/chartist/chartist-init.css') }}">
      <link rel="stylesheet" href="{{ asset('admin/assets/libs/c3/c3.min.css') }}">
      <link rel="stylesheet" href="{{ asset('admin/assets/libs/jvectormap/jquery-jvectormap.css') }}">
      <link rel="stylesheet" href="{{ asset('admin/dist/css/style.css') }}">

      <link rel="stylesheet" type="text/css">
      <link rel="stylesheet" href="{{ asset('admin/assets/libs/select2/dist/css/select2.min.css') }}">
      <link rel="stylesheet" href="{{ asset('admin/assets/libs/ckeditor/samples/toolbarconfigurator/lib/codemirror/neo.css') }}">
      <link rel="stylesheet" href="{{ asset('admin/assets/libs/ckeditor/samples/css/samples.css') }}">

  </head>
<body  style="background-color: whitesmoke;">

    <div class="email-app">
        <!-- ============================================================== -->
        <!-- Left Part -->
        <!-- ============================================================== -->
        <div class="left-part">
            <a class="ti-menu ti-close btn btn-success show-left-part d-block d-md-none" href="javascript:void(0)"></a>
            <div class="scrollable" style="height:100%;">
                <div class="divider"></div>
                <ul class="list-group">
                    <li>
                        <small class="p-3 grey-text text-lighten-1 db">Folders</small>
                    </li>
                    <li class="list-group-item border-0 p-0">
                        <a href="javascript:void(0)" class="active list-group-item-action d-block"><i class="font-18 align-middle mr-1 mdi mdi-inbox"></i> Inbox <span class="badge py-1 badge-success float-right">6</span></a>
                    </li>
                    <li class="list-group-item border-0 p-0">
                        <a href="javascript:void(0)" class="list-group-item-action d-block"> <i class="font-18 align-middle mr-1 mdi mdi-star"></i> Starred </a>
                    </li>
                    <li class="list-group-item border-0 p-0">
                        <a href="javascript:void(0)" class="list-group-item-action d-block"> <i class="font-18 align-middle mr-1 mdi mdi-send"></i> Draft <span class="badge py-1 badge-danger float-right">3</span></a></li>
                    <li class="list-group-item border-0 p-0">
                        <a href="javascript:void(0)" class="list-group-item-action d-block"> <i class="font-18 align-middle mr-1 mdi mdi-email"></i> Sent Mail </a>
                    </li>
                    <li class="list-group-item border-0 p-0">
                        <hr>
                    </li>
                    <li class="list-group-item border-0 p-0">
                        <a href="javascript:void(0)" class="list-group-item-action d-block"> <i class="font-18 align-middle mr-1 mdi mdi-block-helper"></i> Spam </a>
                    </li>
                    <li class="list-group-item border-0 p-0">
                        <a href="javascript:void(0)" class="list-group-item-action d-block"> <i class="font-18 align-middle mr-1 mdi mdi-delete"></i> Trash </a>
                    </li>
                    <li class="list-group-item border-0 p-0">
                        <hr>
                    </li>
                    <li>
                        <small class="p-3 grey-text text-lighten-1 db">Labels</small>
                    </li>
                    <li class="list-group-item border-0 p-0">
                        <a href="javascript:void(0)" class="list-group-item-action d-block"><i class="font-18 align-middle mr-1 text-danger mdi mdi-checkbox-blank-circle"></i> Work </a>
                    </li>
                    <li class="list-group-item border-0 p-0">
                        <a href="javascript:void(0)" class="list-group-item-action d-block"><i class="font-18 align-middle mr-1 text-cyan mdi mdi-checkbox-blank-circle"></i> Business </a>
                    </li>
                    <li class="list-group-item border-0 p-0">
                        <a href="javascript:void(0)" class="list-group-item-action d-block"><i class="font-18 align-middle mr-1 text-warning mdi mdi-checkbox-blank-circle"></i> Family </a>
                    </li>
                    <li class="list-group-item border-0 p-0">
                        <a href="javascript:void(0)" class="list-group-item-action d-block"><i class="font-18 align-middle mr-1 text-info mdi mdi-checkbox-blank-circle"></i> Friends </a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Right Part -->
        <!-- ============================================================== -->
        <div class="right-part mail-list bg-white overflow-auto">

            <!-- Action part -->
            <!-- Button group part -->
            <div class="bg-light p-3 d-flex align-items-center do-block">
                <div class="btn-group mt-1 mb-1">
                    <div class="checkbox checkbox-info">
                        <input type="checkbox" class="sl-all material-inputs" id="cstall">
                        <label for="cstall"> <span>Check all</span> </label>
                    </div>
                </div>
                <div class="ml-auto">
                    <div class="btn-group mr-2" role="group" aria-label="Button group with nested dropdown">
                        <button type="button" class="btn btn-outline-secondary font-18"><i class="mdi mdi-reload"></i></button>
                        <button type="button" class="btn btn-outline-secondary font-18"><i class="mdi mdi-alert-octagon"></i></button>
                        <button type="button" class="btn btn-outline-secondary font-18"><i class="mdi mdi-delete"></i></button>
                    </div>
                    <div class="btn-group mr-2" role="group" aria-label="Button group with nested dropdown">
                        <div class="btn-group" role="group">
                            <button id="btnGroupDrop1" type="button" class="btn btn-outline-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="mdi mdi-folder font-18 "></i> </button>
                            <div class="dropdown-menu" aria-labelledby="btnGroupDrop1"> <a class="dropdown-item" href="javascript:void(0)">Dropdown link</a> <a class="dropdown-item" href="javascript:void(0)">Dropdown link</a> </div>
                        </div>
                        <div class="btn-group" role="group">
                            <button id="btnGroupDrop1" type="button" class="btn btn-outline-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="mdi mdi-label font-18"></i> </button>
                            <div class="dropdown-menu" aria-labelledby="btnGroupDrop1"> <a class="dropdown-item" href="javascript:void(0)">Dropdown link</a> <a class="dropdown-item" href="javascript:void(0)">Dropdown link</a> </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Action part -->
            <!-- Mail list-->
            <div class="table-responsive">
                <table class="table email-table no-wrap table-hover v-middle">
                    <tbody>

                    @if ($feedback->count() > 0)
                        @foreach ($feedback as $item)
                                                    <!-- row -->
                        <tr class="unread">
                            <!-- label -->
                            <td class="chb">
                                <div class="checkbox checkbox-info">
                                    <input type="checkbox" class="material-inputs" id="cst{{$item->id_feedback }}">
                                    <label for="cst1"  class="mb-0"> <span>&nbsp;</span> </label>
                                </div>
                            </td>
                            <!-- User -->
                            <td class="user-image px-1 py-3"><img src="{{asset("image/user.png")}}" alt="user" class="rounded-circle" width="30"></td>
                            <td class="user-name px-1 py-3">
                                <h6 class="mb-0 text-truncate no-wrap">{{   $item->fullname }}</h6>
                            </td>

                            <td class="time">{{   substr($item->created_at, 0, 10) }}</td>

                            <!-- Message -->
                            <td class="max-texts px-1 py-3 no-wrap">
                                <span class="blue-grey-text text-darken-4">{{   $item->content }}</span>
                            </td>
                            <!-- Time -->
                        </tr>
                        @endforeach
                    @endif


                    </tbody>
                </table>
            </div>
        </div>

        <!-- ============================================================== -->
        <!-- Right Part  Mail detail -->
        <!-- ============================================================== -->
        <div class="right-part mail-details bg-white overflow-auto" style="display: none;">
            <div class="card-body bg-light">
                <button type="button" id="back_to_inbox" class="btn btn-outline-secondary font-18 mr-2"><i class="mdi mdi-arrow-left"></i></button>
                <div class="btn-group mr-2" role="group" aria-label="Button group with nested dropdown">
                    <button type="button" class="btn btn-outline-secondary font-18"><i class="mdi mdi-reply"></i></button>
                    <button type="button" class="btn btn-outline-secondary font-18"><i class="mdi mdi-alert-octagon"></i></button>
                    <button type="button" class="btn btn-outline-secondary font-18"><i class="mdi mdi-delete"></i></button>
                </div>
                <div class="btn-group mr-2" role="group" aria-label="Button group with nested dropdown">
                    <div class="btn-group" role="group">
                        <button id="btnGroupDrop1" type="button" class="btn btn-outline-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="mdi mdi-folder font-18 "></i> </button>
                        <div class="dropdown-menu" aria-labelledby="btnGroupDrop1"> <a class="dropdown-item" href="javascript:void(0)">Dropdown link</a> <a class="dropdown-item" href="javascript:void(0)">Dropdown link</a> </div>
                    </div>
                    <div class="btn-group" role="group">
                        <button id="btnGroupDrop1" type="button" class="btn btn-outline-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="mdi mdi-label font-18"></i> </button>
                        <div class="dropdown-menu" aria-labelledby="btnGroupDrop1"> <a class="dropdown-item" href="javascript:void(0)">Dropdown link</a> <a class="dropdown-item" href="javascript:void(0)">Dropdown link</a> </div>
                    </div>
                </div>
            </div>
            <div class="card-body border-bottom">
                <h4 class="mb-0">Your Message title goes here</h4>
            </div>
            <div class="card-body border-bottom">
                <div class="d-flex no-block align-items-center mb-5">
                    <div class="mr-2"><img src="../assets/images/users/1.jpg" alt="user" class="rounded-circle" width="45"></div>
                    <div class="">
                        <h5 class="mb-0 font-16 font-medium">Hanna Gover <small> ( hgover@gmail.com )</small></h5><span>to Suniljoshi19@gmail.com</span>
                    </div>
                </div>
                <h4 class="mb-3">Hey Hi,</h4>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi.</p>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi.</p>
            </div>
            <div class="card-body">
                <h4><i class="fa fa-paperclip mr-2 mb-2"></i> Attachments <span>(3)</span></h4>
                <div class="row">
                    <div class="col-md-2">
                        <a href="javascript:void(0)"> <img class="img-thumbnail img-fluid" alt="attachment" src="../assets/images/big/img1.jpg"> </a>
                    </div>
                    <div class="col-md-2">
                        <a href="javascript:void(0)"> <img class="img-thumbnail img-fluid" alt="attachment" src="../assets/images/big/img2.jpg"> </a>
                    </div>
                    <div class="col-md-2">
                        <a href="javascript:void(0)"> <img class="img-thumbnail img-fluid" alt="attachment" src="../assets/images/big/img3.jpg"> </a>
                    </div>
                </div>
                <div class="border mt-3 p-3">
                    <p class="pb-3">click here to <a href="javascript:void(0)">Reply</a> or <a href="javascript:void(0)">Forward</a></p>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('admin/assets/libs/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('admin/assets/libs/popper.js/dist/umd/popper.min.js') }}"></script>
    <script src="{{ asset('admin/assets/libs/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('admin/dist/js/app.min.js') }}"></script>
    <script src="{{ asset('admin/dist/js/app.init.js') }}"></script>
    <script src="{{ asset('admin/dist/js/app-style-switcher.js') }}"></script>
    <script src="{{ asset('admin/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js') }}"></script>
    <script src="{{ asset('admin/assets/extra-libs/sparkline/sparkline.js') }}"></script>
    <script src="{{ asset('admin/dist/js/waves.js') }}"></script>
    <script src="{{ asset('admin/dist/js/sidebarmenu.js') }}"></script>
    <script src="{{ asset('admin/dist/js/custom.min.js') }}"></script>
    <script src="{{ asset('admin/assets/extra-libs/jvector/jquery-jvectormap-us-aea-en.js') }}"></script>
    <script src="{{ asset('admin/dist/js/pages/dashboards/dashboard2.js') }}"></script>

    <script src="{{ asset('admin/dist/js/pages/notes/notes.js') }}"></script>
<script src="{{ asset('admin/dist/js/pages/forms/select2/select2.init.js') }}"></script>


<script src="{{ asset('admin/assets/libs/dropzone/dist/min/dropzone.min.js') }}"></script>
<script src="{{ asset('admin/dist/js/pages/echarts/bar/bar.js') }}"></script>
<script src="{{ asset('admin/assets/libs/chartist/dist/js/app-style-switcher.js') }}"></script>
<script src="{{ asset('admin/dist/js/chat/pages/email/email.js') }}"></script>

<script>
    $('#summernote').summernote({
        placeholder: 'Type your email Here',
        tabsize: 2,
        height: 250
    });
    Dropzone.autoDiscover = false;
    $("#dzid").dropzone({ url: "/file/post" });
    </script>
</body>

</html>
