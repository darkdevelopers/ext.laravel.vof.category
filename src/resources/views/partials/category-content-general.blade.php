<span>
    <b>
        @lang('vof.admin.category::category.create.partials.general-informations')
    </b>
</span>
<hr/>
<div class="form-label-group">
    <input type="text" id="title" name="title" class="form-control" required minlength="20" maxlength="60"
           placeholder="@lang('vof.admin.category::category.create.partials.placeholder.title')">
    <label for="title"></label>
</div>
<div class="form-label-group">
    <label for="description">@lang('vof.admin.category::category.create.partials.placeholder.description')</label>
    <textarea class="form-control" id="description" name="description" rows="3"  required maxlength="512"></textarea>
</div>
<div class="form-label-group">
    <br>
    <label for="categoryParents">@lang('vof.admin.category::category.create.partials.placeholder.parentcategorieselect')</label>
    <select id="categoryParents" name="categoryParents" class="form-control" required>
        <option value="0">@lang('vof.admin.category::category.create.partials.placeholder.nocategorieselected')</option>
        @foreach($categories as $categorie)
            <option value="{{ $categorie->id }}">{{ $categorie->categoryContent->title }}</option>
        @endforeach
    </select>
</div>
