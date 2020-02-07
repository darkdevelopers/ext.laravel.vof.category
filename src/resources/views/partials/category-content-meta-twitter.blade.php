<hr/>
<span>
    <b>
        @lang('vof.admin.category::category.create.partials.meta-twitter-informations')
    </b>
</span>
<hr/>
<div class="form-label-group">
    <div class="form-label-group">
        @include('vof.admin.assets::partials.upload', ['name' => 'metaTwitterImage', 'uploadLable' => 'upload-label-meta-twitter'])
    </div>
</div>
<div class="form-label-group">
    <input type="text" id="metaTwitterTitle" name="metaTwitterTitle" class="form-control" maxlength="65"
           placeholder="@lang('vof.admin.category::category.create.partials.placeholder.title')">
    <label for="metaTwitterTitle"></label>
</div>
<div class="form-label-group">
    <input type="url" id="metaTwitterUrl" name="metaTwitterUrl" class="form-control"
           placeholder="@lang('vof.admin.category::category.create.partials.placeholder.meta.url')">
    <label for="metaTwitterUrl"></label>
</div>
<div class="form-label-group">
    <input type="text" id="metaTwitterSitename" name="metaTwitterSitename" class="form-control" maxlength="65"
           placeholder="@lang('vof.admin.category::category.create.partials.placeholder.meta.sitename')">
    <label for="metaTwitterSitename"></label>
</div>
<div class="form-label-group">
    <label for="metaTwitterType">@lang('vof.admin.category::category.create.partials.placeholder.meta.type')</label>
    <select id="metaTwitterType" name="metaTwitterType" class="form-control">
        @foreach($metaTypes as $metaType)
            <option value="{{ $metaType->id }}">{{ $metaType->type }}</option>
        @endforeach
    </select>
</div>
<br>
