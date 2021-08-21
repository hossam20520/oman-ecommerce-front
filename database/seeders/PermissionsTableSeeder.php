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
                'title' => 'inventory_create',
            ],
            [
                'id'    => 24,
                'title' => 'inventory_edit',
            ],
            [
                'id'    => 25,
                'title' => 'inventory_show',
            ],
            [
                'id'    => 26,
                'title' => 'inventory_delete',
            ],
            [
                'id'    => 27,
                'title' => 'inventory_access',
            ],
            [
                'id'    => 28,
                'title' => 'group_create',
            ],
            [
                'id'    => 29,
                'title' => 'group_edit',
            ],
            [
                'id'    => 30,
                'title' => 'group_show',
            ],
            [
                'id'    => 31,
                'title' => 'group_delete',
            ],
            [
                'id'    => 32,
                'title' => 'group_access',
            ],
            [
                'id'    => 33,
                'title' => 'connection_create',
            ],
            [
                'id'    => 34,
                'title' => 'connection_edit',
            ],
            [
                'id'    => 35,
                'title' => 'connection_show',
            ],
            [
                'id'    => 36,
                'title' => 'connection_delete',
            ],
            [
                'id'    => 37,
                'title' => 'connection_access',
            ],
            [
                'id'    => 38,
                'title' => 'filter_create',
            ],
            [
                'id'    => 39,
                'title' => 'filter_edit',
            ],
            [
                'id'    => 40,
                'title' => 'filter_show',
            ],
            [
                'id'    => 41,
                'title' => 'filter_delete',
            ],
            [
                'id'    => 42,
                'title' => 'filter_access',
            ],
            [
                'id'    => 43,
                'title' => 'order_create',
            ],
            [
                'id'    => 44,
                'title' => 'order_edit',
            ],
            [
                'id'    => 45,
                'title' => 'order_show',
            ],
            [
                'id'    => 46,
                'title' => 'order_delete',
            ],
            [
                'id'    => 47,
                'title' => 'order_access',
            ],
            [
                'id'    => 48,
                'title' => 'client_create',
            ],
            [
                'id'    => 49,
                'title' => 'client_edit',
            ],
            [
                'id'    => 50,
                'title' => 'client_show',
            ],
            [
                'id'    => 51,
                'title' => 'client_delete',
            ],
            [
                'id'    => 52,
                'title' => 'client_access',
            ],
            [
                'id'    => 53,
                'title' => 'make_create',
            ],
            [
                'id'    => 54,
                'title' => 'make_edit',
            ],
            [
                'id'    => 55,
                'title' => 'make_show',
            ],
            [
                'id'    => 56,
                'title' => 'make_delete',
            ],
            [
                'id'    => 57,
                'title' => 'make_access',
            ],
            [
                'id'    => 58,
                'title' => 'car_guid_access',
            ],
            [
                'id'    => 59,
                'title' => 'type_create',
            ],
            [
                'id'    => 60,
                'title' => 'type_edit',
            ],
            [
                'id'    => 61,
                'title' => 'type_show',
            ],
            [
                'id'    => 62,
                'title' => 'type_delete',
            ],
            [
                'id'    => 63,
                'title' => 'type_access',
            ],
            [
                'id'    => 64,
                'title' => 'modell_create',
            ],
            [
                'id'    => 65,
                'title' => 'modell_edit',
            ],
            [
                'id'    => 66,
                'title' => 'modell_show',
            ],
            [
                'id'    => 67,
                'title' => 'modell_delete',
            ],
            [
                'id'    => 68,
                'title' => 'modell_access',
            ],
            [
                'id'    => 69,
                'title' => 'profile_password_edit',
            ],
        ];

        Permission::insert($permissions);
    }
}
