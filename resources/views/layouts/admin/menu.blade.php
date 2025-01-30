<!-- need to remove -->
<li class="nav-item">
    <a href="{{ route('home') }}" class="nav-link {{ Request::is('home') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Home</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('categories.index') }}" class="nav-link {{ Request::is('categories*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Categories</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('subcategories.index') }}" class="nav-link {{ Request::is('subcategories*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Subcategories</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('users.index') }}" class="nav-link {{ Request::is('users*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Users</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('roles.index') }}" class="nav-link {{ Request::is('roles*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Roles</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('wishers.index') }}" class="nav-link {{ Request::is('wishers*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Wishers</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('wishlistItems.index') }}" class="nav-link {{ Request::is('wishlistItems*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Wishlist Items</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('wishlists.index') }}" class="nav-link {{ Request::is('wishlists*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Wishlists</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('orders.index') }}" class="nav-link {{ Request::is('orders*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Orders</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('orderItems.index') }}" class="nav-link {{ Request::is('orderItems*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Order Items</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('inventories.index') }}" class="nav-link {{ Request::is('inventories*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Inventories</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('permissions.index') }}" class="nav-link {{ Request::is('permissions*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Permissions</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('rolePermissions.index') }}" class="nav-link {{ Request::is('rolePermissions*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Role Permissions</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('statuses.index') }}" class="nav-link {{ Request::is('statuses*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Statuses</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('deliveries.index') }}" class="nav-link {{ Request::is('deliveries*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Deliveries</p>
    </a>
</li>
