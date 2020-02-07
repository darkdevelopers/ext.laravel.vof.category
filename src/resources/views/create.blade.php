@extends('admin::layouts.admin-layout-default')

@section('css')
    <link rel="stylesheet" href="/css/upload.css">
    <script
        src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
        crossorigin="anonymous"></script>
@endsection

@section('title')
    <title>@lang('vof.admin.category::category.create.headline') | VOF Admin</title>
@endsection()

@section('sidebar')
    @include('admin::partials.sidebar')
@endsection()

@section('content')
    <h2>@lang('vof.admin.category::category.create.headline')</h2>
    <div class="row">
        <div class="col-sm-12">
            @include('vof.admin.category::partials.form-status')
        </div>
    </div>
    @include('vof.admin.category::partials.category-content', ['metaTypes' => $metaTypes, 'categories' => $categories])
@endsection()

@section('scripts')
    @include('vof.admin.assets::scripts.upload')
@endsection
