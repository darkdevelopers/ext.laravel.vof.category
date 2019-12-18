<?php

return [
    'index' => [
        'headline' => 'Category',
        'add-category' => 'Add Category',
        'partials' => [
            'table' => [
                'id' => 'ID',
                'parent_id' => 'Parent Id',
                'title' => 'Title',
                'created' => 'Create at',
                'updated' => 'Updated at',
                'actions' => 'Actions',
                'show_tooltip' => 'Show Admin',
                'edit_tooltip' => 'Edit Admin',
                'edit_button' => '<a href=":route" class="btn btn-primary"><i class="fas faw fa-edit" aria-hidden="true"></i></a>',
                'show_button' => '<a href=":route" class="btn btn-secondary"><i class="fas faw fa-eye" aria-hidden="true"></i></a>',
                'delete_button' => '<i class="fas fa-fw fa-trash-alt" aria-hidden="true"></i>',
                'delete_category_title' => 'Delete category sure?',
                'delete_category_message' => 'Are you sure you want to delete :category?',
                'delete_category_btn_cancel' => '<i class="fas fa-fw fa-times" aria-hidden="true"></i> Cancel',
                'delete_category_btn_confirm' => '<i class="fas fa-fw fa-trash-alt" aria-hidden="true"></i> Delete',
                'category-delete-success' => 'Successfully deleted the category!',
            ]
        ]
    ],
    'create' => [
        'headline' => 'Create Category',
        'partials' => [
            'general-informations' => 'General Informations',
            'meta-informations' => 'Meta Informations',
            'meta-facebook-informations' => 'Facebook meta informations',
            'meta-twitter-informations' => 'Twitter meta informations',
            'placeholder' => [
                'title' => 'Category Title',
                'description' => 'Description',
                'meta' => [
                    'title' => 'Meta Title',
                    'description' => 'Meta Description',
                ]
            ]
        ]
    ],
    ''
];
