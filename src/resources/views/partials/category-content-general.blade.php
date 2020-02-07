<span>
    <b>
        @lang('vof.admin.category::category.create.partials.general-informations')
    </b>
</span>
<hr/>
<div class="form-label-group">
    <input type="text" id="title" name="title" class="form-control"
           placeholder="@lang('vof.admin.category::category.create.partials.placeholder.title')">
    <label for="title"></label>
</div>
<div class="form-label-group">
    <label for="description">@lang('vof.admin.category::category.create.partials.placeholder.description')</label>
    <textarea class="form-control" id="description" rows="3"></textarea>
</div>
<div class="form-label-group">
    <br>
    <label for="categoryParents">@lang('vof.admin.category::category.create.partials.placeholder.parentcategorieselect')</label>
    <select id="categoryParents" class="form-control">
        <option value="0">@lang('vof.admin.category::category.create.partials.placeholder.nocategorieselected')</option>
        @foreach($categories as $categorie)
            <option value="{{ $categorie->id }}">{{ $categorie->categoryContent->title }}</option>
        @endforeach
    </select>
</div>
