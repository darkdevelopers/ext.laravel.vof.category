<hr/>
<span>
    <b>
        @lang('vof.admin.category::category.create.partials.meta-informations')
    </b>
</span>
<hr/>
<div class="form-label-group">
    <input type="text" id="metaTitle" name="metaTitle" class="form-control"
           placeholder="@lang('vof.admin.category::category.create.partials.placeholder.meta.title')" maxlength="65">
    <label for="metaTitle"></label>
</div>
<div class="form-label-group">
    <label for="metaDescription">@lang('vof.admin.category::category.create.partials.placeholder.meta.description')</label>
    <textarea class="form-control" id="metaDescription" rows="3" maxlength="160" placeholder="@lang('vof.admin.category::category.create.partials.placeholder.meta.description')"></textarea>
</div>
<div class="form-label-group">
    <br>
    <label for="metaFacebookType">@lang('vof.admin.category::category.create.partials.placeholder.meta.type')</label>
    <select id="metaFacebookType" class="form-control">
        @foreach($metaTypes as $metaType)
            <option value="{{ $metaType->id }}">{{ $metaType->type }}</option>
        @endforeach
    </select>
</div>
