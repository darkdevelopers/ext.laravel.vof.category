@extends('admin::layouts.admin-layout-default')

@section('css')
@endsection

@section('title')
    <title>@lang('vof.admin.category::category.create.headline') | VOF Admin</title>
@endsection()

@section('sidebar')
    @include('admin::partials.sidebar')
@endsection()

@section('content')
    <h2>@lang('vof.admin.category::category.create.headline')</h2>
    @include('vof.admin.category::partials.category-content', ['metaTypes' => $metaTypes])

@endsection()

@section('scripts')
@endsection
