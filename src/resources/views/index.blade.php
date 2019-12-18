@extends('admin::layouts.admin-layout-default')

@section('css')
    @include('vof.admin.category::partials.style')
    <script
            src="https://code.jquery.com/jquery-3.4.1.min.js"
            integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
            crossorigin="anonymous"></script>
    @include('vof.admin.category::scripts.delete-modal-script')
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
            @include('vof.admin.category::partials.table', ['categorys' => $categorys])
        </div>
    </div>
@endsection()
