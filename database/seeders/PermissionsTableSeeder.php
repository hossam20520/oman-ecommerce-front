<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            [
                'id'    => 1,
                'title' => 'user_management_access',
            ],
            [
                'id'    => 2,
                'title' => 'permission_create',
            ],
            [
                'id'    => 3,
                'title' => 'permission_edit',
            ],
            [
                'id'    => 4,
                'title' => 'permission_show',
            ],
            [
                'id'    => 5,
                'title' => 'permission_delete',
            ],
            [
                'id'    => 6,
                'title' => 'permission_access',
            ],
            [
                'id'    => 7,
                'title' => 'role_create',
            ],
            [
                'id'    => 8,
                'title' => 'role_edit',
            ],
            [
                'id'    => 9,
                'title' => 'role_show',
            ],
            [
                'id'    => 10,
                'title' => 'role_delete',
            ],
            [
                'id'    => 11,
                'title' => 'role_access',
            ],
            [
                'id'    => 12,
                'title' => 'user_create',
            ],
            [
                'id'    => 13,
                'title' => 'user_edit',
            ],
            [
                'id'    => 14,
                'title' => 'user_show',
            ],
            [
                'id'    => 15,
                'title' => 'user_delete',
            ],
            [
                'id'    => 16,
                'title' => 'user_access',
            ],
            [
                'id'    => 17,
                'title' => 'product_access',
            ],
            [
                'id'    => 18,
                'title' => 'category_create',
            ],
            [
                'id'    => 19,
                'title' => 'category_edit',
            ],
            [
                'id'    => 20,
                'title' => 'category_show',
            ],
            [
                'id'    => 21,
                'title' => 'category_delete',
            ],
            [
                'id'    => 22,
                'title' => 'category_access',
            ],
            [
                'id'    => 23,
                'title' => 'brand_create',
            ],
            [
                'id'    => 24,
                'title' => 'brand_edit',
            ],
            [
                'id'    => 25,
                'title' => 'brand_show',
            ],
            [
                'id'    => 26,
                'title' => 'brand_delete',
            ],
            [
                'id'    => 27,
                'title' => 'brand_access',
            ],
            [
                'id'    => 28,
                'title' => 'inventory_create',
            ],
            [
                'id'    => 29,
                'title' => 'inventory_edit',
            ],
            [
                'id'    => 30,
                'title' => 'inventory_show',
            ],
            [
                'id'    => 31,
                'title' => 'inventory_delete',
            ],
            [
                'id'    => 32,
                'title' => 'inventory_access',
            ],
            [
                'id'    => 33,
                'title' => 'group_create',
            ],
            [
                'id'    => 34,
                'title' => 'group_edit',
            ],
            [
                'id'    => 35,
                'title' => 'group_show',
            ],
            [
                'id'    => 36,
                'title' => 'group_delete',
            ],
            [
                'id'    => 37,
                'title' => 'group_access',
            ],
            [
                'id'    => 38,
                'title' => 'connection_create',
            ],
            [
                'id'    => 39,
                'title' => 'connection_edit',
            ],
            [
                'id'    => 40,
                'title' => 'connection_show',
            ],
            [
                'id'    => 41,
                'title' => 'connection_delete',
            ],
            [
                'id'    => 42,
                'title' => 'connection_access',
            ],
            [
                'id'    => 43,
                'title' => 'filter_create',
            ],
            [
                'id'    => 44,
                'title' => 'filter_edit',
            ],
            [
                'id'    => 45,
                'title' => 'filter_show',
            ],
            [
                'id'    => 46,
                'title' => 'filter_delete',
            ],
            [
                'id'    => 47,
                'title' => 'filter_access',
            ],
            [
                'id'    => 48,
                'title' => 'order_create',
            ],
            [
                'id'    => 49,
                'title' => 'order_edit',
            ],
            [
                'id'    => 50,
                'title' => 'order_show',
            ],
            [
                'id'    => 51,
                'title' => 'order_delete',
            ],
            [
                'id'    => 52,
                'title' => 'order_access',
            ],
            [
                'id'    => 53,
                'title' => 'profile_password_edit',
            ],
        ];

        Permission::insert($permissions);
    }
}
