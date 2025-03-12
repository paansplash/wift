@php
$menuItems = [
    ['route' => 'admin.home.index', 'icon' => 'fas fa-home', 'label' => 'Home'],
    ['route' => 'admin.categories.index', 'icon' => 'fas fa-list', 'label' => 'Categories'],
    ['route' => 'admin.subcategories.index', 'icon' => 'fas fa-layer-group', 'label' => 'Subcategories'],
    ['route' => 'admin.users.index', 'icon' => 'fas fa-user', 'label' => 'Users'],
    ['route' => 'admin.roles.index', 'icon' => 'fas fa-user-shield', 'label' => 'Roles'],
    ['route' => 'admin.wishers.index', 'icon' => 'fas fa-heart', 'label' => 'Wishers'],
    ['route' => 'admin.wishlists.index', 'icon' => 'fas fa-list-alt', 'label' => 'Wishlists'],
    ['route' => 'admin.wishlistItems.index', 'icon' => 'fas fa-gift', 'label' => 'Wishlist Items'],
    ['route' => 'admin.orders.index', 'icon' => 'fas fa-shopping-cart', 'label' => 'Orders'],
    ['route' => 'admin.orderItems.index', 'icon' => 'fas fa-box', 'label' => 'Order Items'],
    ['route' => 'admin.inventories.index', 'icon' => 'fas fa-warehouse', 'label' => 'Inventories'],
    ['route' => 'admin.permissions.index', 'icon' => 'fas fa-lock', 'label' => 'Permissions'],
    ['route' => 'admin.rolePermissions.index', 'icon' => 'fas fa-user-cog', 'label' => 'Role Permissions'],
    ['route' => 'admin.statuses.index', 'icon' => 'fas fa-info-circle', 'label' => 'Statuses'],
    ['route' => 'admin.deliveries.index', 'icon' => 'fas fa-truck', 'label' => 'Deliveries'],
];
@endphp

@foreach ($menuItems as $item)
    <li class="nav-item">
        <a href="{{ route($item['route']) }}" 
           class="nav-link {{ Request::is(str_replace('.index', '', $item['route']).'*') ? 'active' : '' }}">
            <i class="nav-icon {{ $item['icon'] }}"></i>
            <p>{{ $item['label'] }}</p>
        </a>
    </li>
@endforeach
