<div class="card">
    <a href="{{ route('category.create') }}" class="btn btn-primary" style="margin: 5px;">
        <i class="fa fa-fw fa-user-plus" aria-hidden="true"></i>
        @lang('vof.admin.category::category.index.add-category')
    </a>
    <div style="overflow-x: auto" class="card-body">
        <table width="100%" class="table table-striped task-table">
            <thead>
            <tr>
                <th>@lang('vof.admin.category::category.index.partials.table.id')</th>
                <th>@lang('vof.admin.category::category.index.partials.table.title')</th>
                <th>@lang('vof.admin.category::category.index.partials.table.parent_id')</th>
                <th>@lang('vof.admin.category::category.index.partials.table.created')</th>
                <th>@lang('vof.admin.category::category.index.partials.table.updated')</th>
                <th>@lang('vof.admin.category::category.index.partials.table.actions')</th>
            </tr>
            </thead>
            <tbody>
            @foreach($categorys as $category)
                <tr>
                    <td class="table-text">{{ $category->id }}</td>
                    <td class="table-text">{{ $category->categoryContent->title }}</td>
                    <td class="table-text">{{ $category->parent_id }}</td>
                    <td class="table-text">{{ $category->created_at }}</td>
                    <td class="table-text">{{ $category->updated_at }}</td>
                    <td class="table-btn">
                        {!! Form::open(array('url' => route('category.destroy', $category->id), 'class' => '', 'data-toggle' => 'tooltip')) !!}
                        {!! Form::hidden('_method', 'DELETE') !!}
                        @lang('vof.admin.category::category.index.partials.table.edit_button', ['route' => route('category.edit', $category->id)])
                        {!! Form::button(trans('vof.admin.category::category.index.partials.table.delete_button'), array('class' => 'btn btn-danger','type' => 'button', 'style' =>'width: auto;' ,'data-toggle' => 'modal', 'data-target' => '#confirmDelete', 'data-title' => trans('vof.admin.category::category.index.partials.table.delete_category_title'), 'data-message' => trans('vof.admin.category::category.index.partials.table.delete_category_message', ['category' => $category->title]))) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
@include('vof.admin.category::modal.delete', ['name' => 'Category'])
