@extends('admin::layouts.admin-layout-default')

@section('css')
    <script src="https://cdn.ckeditor.com/ckeditor5/15.0.0/classic/ckeditor.js"></script>
@endsection

@section('title')
    <title>@lang('vof.admin.category::category.create.headline') | VOF Admin</title>
@endsection()

@section('sidebar')
    @include('admin::partials.sidebar')
@endsection()

@section('content')
    <h2>@lang('vof.admin.category::category.create.headline')</h2>
    @include('vof.admin.category::partials.category-content')

@endsection()

@section('scripts')
    @include('vof.admin.category::scripts.wysiwyg')
@endsection
