@extends('admin::layouts.admin-layout-default')

@section('css')

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
            @foreach($categorys as $category)
                {{ var_dump($category) }}
            @endforeach
        </div>
    </div>
@endsection()
