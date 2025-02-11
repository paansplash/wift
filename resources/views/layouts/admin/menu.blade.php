@php
$menuItems = [
    ['route' => 'home', 'icon' => 'fas fa-home', 'label' => 'Home'],
    ['route' => 'categories.index', 'icon' => 'fas fa-list', 'label' => 'Categories'],
    ['route' => 'subcategories.index', 'icon' => 'fas fa-layer-group', 'label' => 'Subcategories'],
    ['route' => 'users.index', 'icon' => 'fas fa-user', 'label' => 'Users'],
    ['route' => 'roles.index', 'icon' => 'fas fa-user-shield', 'label' => 'Roles'],
    ['route' => 'wishers.index', 'icon' => 'fas fa-heart', 'label' => 'Wishers'],
    ['route' => 'wishlistItems.index', 'icon' => 'fas fa-gift', 'label' => 'Wishlist Items'],
    ['route' => 'wishlists.index', 'icon' => 'fas fa-list-alt', 'label' => 'Wishlists'],
    ['route' => 'orders.index', 'icon' => 'fas fa-shopping-cart', 'label' => 'Orders'],
    ['route' => 'orderItems.index', 'icon' => 'fas fa-box', 'label' => 'Order Items'],
    ['route' => 'inventories.index', 'icon' => 'fas fa-warehouse', 'label' => 'Inventories'],
    ['route' => 'permissions.index', 'icon' => 'fas fa-lock', 'label' => 'Permissions'],
    ['route' => 'rolePermissions.index', 'icon' => 'fas fa-user-cog', 'label' => 'Role Permissions'],
    ['route' => 'statuses.index', 'icon' => 'fas fa-info-circle', 'label' => 'Statuses'],
    ['route' => 'deliveries.index', 'icon' => 'fas fa-truck', 'label' => 'Deliveries'],
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
