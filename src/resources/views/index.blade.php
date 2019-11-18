@extends('admin::layouts.admin-layout-default')

@section('css')
    <!-- Scripts -->
    <script src="{{ asset('js/vof.admin/cody-multi-level-main.js') }}" defer></script>
    <script src="{{ asset('js/vof.admin/cody-multi-level-utils.js') }}" defer></script>
    <!-- Styles -->
    <link href="{{ asset('css/vof.admin/cody-multi-level-menu.css') }}" rel="stylesheet">

    <style>
        body{
            background-color: transparent;
            font-family: "Nunito", sans-serif;
            font-size: 0.9rem;
            font-weight: 400;
            line-height: 1.6;
            color: #212529;
        }
    </style>
@endsection

@section('title')
    <title>@lang('vof.admin.category::category.index.headline') | VOF Admin</title>
@endsection()

@section('sidebar')
    @include('admin::partials.sidebar')
@endsection()

@section('content')
    <h2>@lang('vof.admin.category::category.index.headline')</h2>
    <div class="row">
        <div class="col">
            {!! $categorys !!}
        </div>
    </div>
@endsection()
