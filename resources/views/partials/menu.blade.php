<aside class="main-sidebar sidebar-dark-primary elevation-4" style="min-height: 917px;">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
        <span class="brand-text font-weight-light">{{ trans('panel.site_title') }}</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route("admin.home") }}">
                        <i class="fas fa-fw fa-tachometer-alt nav-icon">
                        </i>
                        <p>
                            {{ trans('global.dashboard') }}
                        </p>
                    </a>
                </li>
                @can('user_management_access')
                    <li class="nav-item has-treeview {{ request()->is("admin/permissions*") ? "menu-open" : "" }} {{ request()->is("admin/roles*") ? "menu-open" : "" }} {{ request()->is("admin/users*") ? "menu-open" : "" }} {{ request()->is("admin/groups*") ? "menu-open" : "" }}">
                        <a class="nav-link nav-dropdown-toggle" href="#">
                            <i class="fa-fw nav-icon fas fa-users">

                            </i>
                            <p>
                                {{ trans('cruds.userManagement.title') }}
                                <i class="right fa fa-fw fa-angle-left nav-icon"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            @can('permission_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.permissions.index") }}" class="nav-link {{ request()->is("admin/permissions") || request()->is("admin/permissions/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-unlock-alt">

                                        </i>
                                        <p>
                                            {{ trans('cruds.permission.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('role_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.roles.index") }}" class="nav-link {{ request()->is("admin/roles") || request()->is("admin/roles/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-briefcase">

                                        </i>
                                        <p>
                                            {{ trans('cruds.role.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('user_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.users.index") }}" class="nav-link {{ request()->is("admin/users") || request()->is("admin/users/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-user">

                                        </i>
                                        <p>
                                            {{ trans('cruds.user.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('group_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.groups.index") }}" class="nav-link {{ request()->is("admin/groups") || request()->is("admin/groups/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-people-carry">

                                        </i>
                                        <p>
                                            {{ trans('cruds.group.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                        </ul>
                    </li>
                @endcan
                @can('product_access')
                    <li class="nav-item has-treeview {{ request()->is("admin/inventories*") ? "menu-open" : "" }} {{ request()->is("admin/categories*") ? "menu-open" : "" }} {{ request()->is("admin/brands*") ? "menu-open" : "" }}">
                        <a class="nav-link nav-dropdown-toggle" href="#">
                            <i class="fa-fw nav-icon fab fa-product-hunt">

                            </i>
                            <p>
                                {{ trans('cruds.product.title') }}
                                <i class="right fa fa-fw fa-angle-left nav-icon"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            @can('inventory_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.inventories.index") }}" class="nav-link {{ request()->is("admin/inventories") || request()->is("admin/inventories/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-cubes">

                                        </i>
                                        <p>
                                            {{ trans('cruds.inventory.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('category_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.categories.index") }}" class="nav-link {{ request()->is("admin/categories") || request()->is("admin/categories/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-car">

                                        </i>
                                        <p>
                                            {{ trans('cruds.category.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('brand_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.brands.index") }}" class="nav-link {{ request()->is("admin/brands") || request()->is("admin/brands/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-broom">

                                        </i>
                                        <p>
                                            {{ trans('cruds.brand.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                        </ul>
                    </li>
                @endcan
                @can('order_access')
                    <li class="nav-item">
                        <a href="{{ route("admin.orders.index") }}" class="nav-link {{ request()->is("admin/orders") || request()->is("admin/orders/*") ? "active" : "" }}">
                            <i class="fa-fw nav-icon fas fa-cart-arrow-down">

                            </i>
                            <p>
                                {{ trans('cruds.order.title') }}
                            </p>
                        </a>
                    </li>
                @endcan
                @can('filter_access')
                    <li class="nav-item">
                        <a href="{{ route("admin.filters.index") }}" class="nav-link {{ request()->is("admin/filters") || request()->is("admin/filters/*") ? "active" : "" }}">
                            <i class="fa-fw nav-icon fas fa-filter">

                            </i>
                            <p>
                                {{ trans('cruds.filter.title') }}
                            </p>
                        </a>
                    </li>
                @endcan
                @can('connection_access')
                    <li class="nav-item">
                        <a href="{{ route("admin.connections.index") }}" class="nav-link {{ request()->is("admin/connections") || request()->is("admin/connections/*") ? "active" : "" }}">
                            <i class="fa-fw nav-icon fas fa-plug">

                            </i>
                            <p>
                                {{ trans('cruds.connection.title') }}
                            </p>
                        </a>
                    </li>
                @endcan
                @if(file_exists(app_path('Http/Controllers/Auth/ChangePasswordController.php')))
                    @can('profile_password_edit')
                        <li class="nav-item">
                            <a class="nav-link {{ request()->is('profile/password') || request()->is('profile/password/*') ? 'active' : '' }}" href="{{ route('profile.password.edit') }}">
                                <i class="fa-fw fas fa-key nav-icon">
                                </i>
                                <p>
                                    {{ trans('global.change_password') }}
                                </p>
                            </a>
                        </li>
                    @endcan
                @endif
                <li class="nav-item">
                    <a href="#" class="nav-link" onclick="event.preventDefault(); document.getElementById('logoutform').submit();">
                        <p>
                            <i class="fas fa-fw fa-sign-out-alt nav-icon">

                            </i>
                            <p>{{ trans('global.logout') }}</p>
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>