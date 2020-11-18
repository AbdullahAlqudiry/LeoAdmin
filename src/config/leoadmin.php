<?php 

return [

    
    'sidebar' => [

        [
            'header' => 'لوحة التحكم',
            'can' => ['dashboard_view_core_roles', 'dashboard_view_core_users'],

            'menu' => [
        
                [
                    'url' => '/dashboard/core/roles', 
                    'icon' => 'fa fa-eye', 
                    'title' => 'الإدوار',
                    'can' => ['dashboard_view_core_roles']
                ],
        
                [
                    'url' => '/dashboard/core/users', 
                    'icon' => 'fa fa-users', 
                    'title' => 'المستخدمين',
                    'can' => ['dashboard_view_core_users']
                ],
            ]
        ]

    ],


    'permissions' => [

        // Dashboard/Core/UsersController
        ['guard_name' => 'web', 'group_key' => 'dashboard_core_users', 'name' => 'dashboard_view_core_users', 'label' => 'عرض المستخدمين'],
        ['guard_name' => 'web', 'group_key' => 'dashboard_core_users', 'name' => 'dashboard_add_core_users', 'label' => 'إنشاء مستخدم جديد'],
        ['guard_name' => 'web', 'group_key' => 'dashboard_core_users', 'name' => 'dashboard_edit_core_users', 'label' => 'تعديل المستخدم'],
        ['guard_name' => 'web', 'group_key' => 'dashboard_core_users', 'name' => 'dashboard_delete_core_users', 'label' => 'حذف المستخدم'],

        // Dashboard/Core/RolesController
        ['guard_name' => 'web', 'group_key' => 'dashboard_core_roles', 'name' => 'dashboard_view_core_roles', 'label' => 'عرض الإدوار'],
        ['guard_name' => 'web', 'group_key' => 'dashboard_core_roles', 'name' => 'dashboard_add_core_roles', 'label' => 'إنشاء دور جديد'],
        ['guard_name' => 'web', 'group_key' => 'dashboard_core_roles', 'name' => 'dashboard_edit_core_roles', 'label' => 'تعديل الدور'],
        ['guard_name' => 'web', 'group_key' => 'dashboard_core_roles', 'name' => 'dashboard_delete_core_roles', 'label' => 'حذف الدور'],

    ],



];

?>