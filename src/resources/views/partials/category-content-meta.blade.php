<hr/>
<span>
    <b>
        @lang('vof.admin.category::category.create.partials.meta-informations')
    </b>
</span>
<hr/>
<div class="form-label-group">
    <input type="text" id="metaTitle" name="metaTitle" class="form-control"
           placeholder="@lang('vof.admin.category::category.create.partials.placeholder.meta.title')" required maxlength="60">
    <label for="metaTitle"></label>
</div>
<div class="form-label-group">
    <label for="metaDescription">@lang('vof.admin.category::category.create.partials.placeholder.meta.description')</label>
    <textarea class="form-control" id="metaDescription" rows="3" required maxlength="160" placeholder="@lang('vof.admin.category::category.create.partials.placeholder.meta.description')"></textarea>
</div>
<div class="form-label-group">
    <br>
    <label for="metaType">@lang('vof.admin.category::category.create.partials.placeholder.meta.type')</label>
    <select id="metaType" name="metaType" class="form-control">
        @foreach($metaTypes as $metaType)
            <option value="{{ $metaType->id }}">{{ $metaType->type }}</option>
        @endforeach
    </select>
</div>
