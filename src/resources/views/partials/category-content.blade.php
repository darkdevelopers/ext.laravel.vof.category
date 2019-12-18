<div class="card">
    <div style="overflow-x: auto" class="card-body">
        {!! Form::open(array('url' => route('category.store'), 'class' => 'form-signin')) !!}
        {!! Form::hidden('_method', 'POST') !!}
        @include('vof.admin.category::partials.category-content-general')
        @include('vof.admin.category::partials.category-content-meta')
        @include('vof.admin.category::partials.category-content-meta-facebook')
        @include('vof.admin.category::partials.category-content-meta-twitter')
        {!! Form::close() !!}
    </div>
</div>
