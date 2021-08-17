<?php

return [
    'userManagement' => [
        'title'          => 'User management',
        'title_singular' => 'User management',
    ],
    'permission' => [
        'title'          => 'Permissions',
        'title_singular' => 'Permission',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'title'             => 'Title',
            'title_helper'      => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'role' => [
        'title'          => 'Roles',
        'title_singular' => 'Role',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => ' ',
            'title'              => 'Title',
            'title_helper'       => ' ',
            'permissions'        => 'Permissions',
            'permissions_helper' => ' ',
            'created_at'         => 'Created at',
            'created_at_helper'  => ' ',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => ' ',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => ' ',
        ],
    ],
    'user' => [
        'title'          => 'Users',
        'title_singular' => 'User',
        'fields'         => [
            'id'                       => 'ID',
            'id_helper'                => ' ',
            'name'                     => 'Name',
            'name_helper'              => ' ',
            'email'                    => 'Email',
            'email_helper'             => ' ',
            'email_verified_at'        => 'Email verified at',
            'email_verified_at_helper' => ' ',
            'password'                 => 'Password',
            'password_helper'          => ' ',
            'roles'                    => 'Roles',
            'roles_helper'             => ' ',
            'remember_token'           => 'Remember Token',
            'remember_token_helper'    => ' ',
            'created_at'               => 'Created at',
            'created_at_helper'        => ' ',
            'updated_at'               => 'Updated at',
            'updated_at_helper'        => ' ',
            'deleted_at'               => 'Deleted at',
            'deleted_at_helper'        => ' ',
        ],
    ],
    'product' => [
        'title'          => 'Products',
        'title_singular' => 'Product',
    ],
    'category' => [
        'title'          => 'Category',
        'title_singular' => 'Category',
        'fields'         => [
            'id'                      => 'ID',
            'id_helper'               => ' ',
            'category'                => 'Category Name EN',
            'category_helper'         => ' ',
            'created_at'              => 'Created at',
            'created_at_helper'       => ' ',
            'updated_at'              => 'Updated at',
            'updated_at_helper'       => ' ',
            'deleted_at'              => 'Deleted at',
            'deleted_at_helper'       => ' ',
            'image'                   => 'Image',
            'image_helper'            => ' ',
            'category_name_ar'        => 'Category Name AR',
            'category_name_ar_helper' => ' ',
        ],
    ],
    'inventory' => [
        'title'          => 'Inventory',
        'title_singular' => 'Inventory',
        'fields'         => [
            'id'                          => 'ID',
            'id_helper'                   => ' ',
            'name'                        => 'Name EN',
            'name_helper'                 => ' ',
            'sku'                         => 'Sku',
            'sku_helper'                  => ' ',
            'price'                       => 'Price',
            'price_helper'                => ' ',
            'inventory'                   => 'Inventory',
            'inventory_helper'            => ' ',
            'desc'                        => 'Description EN',
            'desc_helper'                 => ' ',
            'short_desc'                  => 'Short Description EN',
            'short_desc_helper'           => ' ',
            'image'                       => 'Image',
            'image_helper'                => ' ',
            'gallery'                     => 'Gallery',
            'gallery_helper'              => ' ',
            'created_at'                  => 'Created at',
            'created_at_helper'           => ' ',
            'updated_at'                  => 'Updated at',
            'updated_at_helper'           => ' ',
            'deleted_at'                  => 'Deleted at',
            'deleted_at_helper'           => ' ',
            'category'                    => 'Category',
            'category_helper'             => ' ',
            'product_cost'                => 'Product Cost',
            'product_cost_helper'         => ' ',
            'price_group_1'               => 'Price Group 1',
            'price_group_1_helper'        => ' ',
            'price_group_2'               => 'Price Group 2',
            'price_group_2_helper'        => ' ',
            'price_group_3'               => 'Price Group 3',
            'price_group_3_helper'        => ' ',
            'price_group_4'               => 'Price Group 4',
            'price_group_4_helper'        => ' ',
            'price_group_5'               => 'Price Group 5',
            'price_group_5_helper'        => ' ',
            'price_group_6'               => 'Price Group 6',
            'price_group_6_helper'        => ' ',
            'product_unit'                => 'Product Unit',
            'product_unit_helper'         => ' ',
            'box_quantity'                => 'Box Quantity',
            'box_quantity_helper'         => ' ',
            'sale'                        => 'Sale',
            'sale_helper'                 => ' ',
            'discount'                    => 'Discount',
            'discount_helper'             => ' ',
            'start_sale_date_time'        => 'Start Sale Date & Time',
            'start_sale_date_time_helper' => ' ',
            'end_sale_date_time'          => 'End Sale Date & Time',
            'end_sale_date_time_helper'   => ' ',
            'howtouse'                    => 'How to use EN',
            'howtouse_helper'             => ' ',
            'product_unit_wholse'         => 'Product Unit Wholsesaler',
            'product_unit_wholse_helper'  => ' ',
            'unit_qty'                    => 'Unit Qty',
            'unit_qty_helper'             => ' ',
            'items_per_unit'              => 'Items Per Unit',
            'items_per_unit_helper'       => ' ',
            'youtube_link'                => 'Youtube Link',
            'youtube_link_helper'         => ' ',
            'brand'                       => 'Brand',
            'brand_helper'                => ' ',
            'name_ar'                     => 'Name AR',
            'name_ar_helper'              => ' ',
            'full_desc_ar'                => 'Full Description AR',
            'full_desc_ar_helper'         => ' ',
            'short_desc_ar'               => 'Short Description AR',
            'short_desc_ar_helper'        => ' ',
            'how_to_use_ar'               => 'How To Use AR',
            'how_to_use_ar_helper'        => ' ',
        ],
    ],
    'group' => [
        'title'          => 'Groups',
        'title_singular' => 'Group',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
            'group'             => 'Group',
            'group_helper'      => ' ',
            'user'              => 'Users',
            'user_helper'       => ' ',
        ],
    ],
    'connection' => [
        'title'          => 'Connection Back-End',
        'title_singular' => 'Connection Back-End',
        'fields'         => [
            'id'                  => 'ID',
            'id_helper'           => ' ',
            'database_url'        => 'Database URL',
            'database_url_helper' => ' ',
            'username'            => 'Username',
            'username_helper'     => ' ',
            'password'            => 'Password',
            'password_helper'     => ' ',
            'created_at'          => 'Created at',
            'created_at_helper'   => ' ',
            'updated_at'          => 'Updated at',
            'updated_at_helper'   => ' ',
            'deleted_at'          => 'Deleted at',
            'deleted_at_helper'   => ' ',
        ],
    ],
    'filter' => [
        'title'          => 'Filter',
        'title_singular' => 'Filter',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'brand'             => 'Brand',
            'brand_helper'      => ' ',
            'model'             => 'Model',
            'model_helper'      => ' ',
            'type'              => 'Type',
            'type_helper'       => ' ',
            'capacities'        => 'capacities',
            'capacities_helper' => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'order' => [
        'title'          => 'Orders',
        'title_singular' => 'Order',
        'fields'         => [
            'id'                    => 'ID',
            'id_helper'             => ' ',
            'orderid'               => 'Order ID',
            'orderid_helper'        => ' ',
            'payment'               => 'Payment ID',
            'payment_helper'        => ' ',
            'payment_status'        => 'Payment Status',
            'payment_status_helper' => ' ',
            'status'                => 'Status',
            'status_helper'         => ' ',
            'total_cost'            => 'Total Cost',
            'total_cost_helper'     => ' ',
            'street_1'              => 'Street 1',
            'street_1_helper'       => ' ',
            'city'                  => 'City',
            'city_helper'           => ' ',
            'state'                 => 'State',
            'state_helper'          => ' ',
            'country'               => 'country',
            'country_helper'        => ' ',
            'zip'                   => 'Zip',
            'zip_helper'            => ' ',
            'phone'                 => 'Phone',
            'phone_helper'          => ' ',
            'created_at'            => 'Created at',
            'created_at_helper'     => ' ',
            'updated_at'            => 'Updated at',
            'updated_at_helper'     => ' ',
            'deleted_at'            => 'Deleted at',
            'deleted_at_helper'     => ' ',
        ],
    ],
];
