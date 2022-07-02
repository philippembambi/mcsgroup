@extends('admin.app')

@section('content')

<link rel="stylesheet" href="{{ asset('vendor/datatables/dataTables.bootstrap4.min.css') }}">

<div class="page-wrapper">

    <div class="container-fluid">

    <iframe src="{{ route('management.user/get') }}" frameborder="0" style="width: 100%; height: 700px;"></iframe>

    <script src="{{ asset('js/demo/datatables-demo.js') }}"></script>

    </div>
</div>

@include('admin.components.settings')

@endsection
