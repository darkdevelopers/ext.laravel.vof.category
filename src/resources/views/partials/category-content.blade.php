<div class="card">
    <div style="overflow-x: auto" class="card-body">
        {!! Form::open(array('url' => route('category.store'), 'class' => 'form-signin')) !!}
        {!! Form::hidden('_method', 'POST') !!}
        @include('vof.admin.category::partials.category-content-general', ['categories' => $categories])
        @include('vof.admin.category::partials.category-content-meta', ['metaTypes' => $metaTypes])
        @include('vof.admin.category::partials.category-content-meta-facebook', ['metaTypes' => $metaTypes])
        @include('vof.admin.category::partials.category-content-meta-twitter', ['metaTypes' => $metaTypes])
        {!! Form::button(trans('vof.admin.category::category.create.partials.btn-save'), array('class' => 'btn btn-lg btn-primary btn-block text-uppercase','type' => 'submit')) !!}
        {!! Form::close() !!}
    </div>
</div>
