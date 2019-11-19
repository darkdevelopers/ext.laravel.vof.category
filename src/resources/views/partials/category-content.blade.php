<div class="card">
    <div style="overflow-x: auto" class="card-body">
        {!! Form::open(array('url' => route('category.store'), 'class' => 'form-signin')) !!}
        {!! Form::hidden('_method', 'POST') !!}
        <span>
            <b>
                Contents
            </b>
        </span>
        <div class="form-label-group">
            <input type="text" id="name" name="name" class="form-control @if(!empty($errors->error->first('name'))) is-invalid @endif" placeholder="@lang('vof.admin.usermanagment::usermanagment.partials.create-read-update.username')" value="@if(empty($admin)){{ old('name') }}@else {{ $admin->name }}@endif" required autofocus @if($disabled)disabled="disabled"@endif>
            <label for="name"></label>
        </div>
        {!! Form::close() !!}
    </div>
</div>
