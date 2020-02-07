<hr/>
<span>
    <b>
        @lang('vof.admin.category::category.create.partials.meta-facebook-informations')
    </b>
</span>
<hr/>
<div class="form-label-group">
    @include('vof.admin.assets::partials.upload', ['name' => 'metaFBImage', 'uploadLable' => 'upload-label-meta-fb'])
</div>
<div class="form-label-group">
    <input type="text" id="metaFacebookTitle" name="metaFacebookTitle" class="form-control"
           placeholder="@lang('vof.admin.category::category.create.partials.placeholder.title')" maxlength="65">
    <label for="metaFacebookTitle"></label>
</div>
<div class="form-label-group">
    <input type="url" id="metaFacebookUrl" name="metaFacebookUrl" class="form-control"
           placeholder="@lang('vof.admin.category::category.create.partials.placeholder.meta.url')">
    <label for="metaFacebookUrl"></label>
</div>
<div class="form-label-group">
    <input type="text" id="metaFacebookSitename" name="metaFacebookSitename" class="form-control"
           placeholder="@lang('vof.admin.category::category.create.partials.placeholder.meta.sitename')" maxlength="65">
    <label for="metaFacebookSitename"></label>
</div>
<div class="form-label-group">
    <label for="metaFacebookType">@lang('vof.admin.category::category.create.partials.placeholder.meta.type')</label>
    <select id="metaFacebookType" name="metaFacebookType" class="form-control">
        @foreach($metaTypes as $metaType)
            <option value="{{ $metaType->id }}">{{ $metaType->type }}</option>
        @endforeach
    </select>
</div>
