<hr/>
<span>
    <b>
        @lang('vof.admin.category::category.create.partials.meta-twitter-informations')
    </b>
</span>
<hr/>
<div class="form-label-group">
    <span>
        @Todo Implement Image upload
    </span>
</div>
<div class="form-label-group">
    <input type="text" id="metaFacebookTitle" name="metaFacebookTitle" class="form-control"
           placeholder="@lang('vof.admin.category::category.create.partials.placeholder.title')">
    <label for="metaFacebookTitle"></label>
</div>
<div class="form-label-group">
    <input type="url" id="metaFacebookUrl" name="metaFacebookUrl" class="form-control"
           placeholder="@lang('vof.admin.category::category.create.partials.placeholder.meta.url')">
    <label for="metaFacebookUrl"></label>
</div>
<div class="form-label-group">
    <input type="text" id="metaFacebookSitename" name="metaFacebookSitename" class="form-control"
           placeholder="@lang('vof.admin.category::category.create.partials.placeholder.meta.sitename')">
    <label for="metaFacebookSitename"></label>
</div>
<div class="form-label-group">
    <label for="metaTwitterType">@lang('vof.admin.category::category.create.partials.placeholder.meta.type')</label>
    <select id="metaTwitterType" class="form-control">
        @foreach($metaTypes as $metaType)
            <option value="{{ $metaType->id }}">{{ $metaType->type }}</option>
        @endforeach
    </select>
</div>
<br>
