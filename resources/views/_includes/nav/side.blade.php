<div class="side-menu">
    <aside class="menu m-t-30 m-l-10">
        <p class="menu-label">Administration</p>
        <ul class="menu-list">
            <li><a href="{{route('manage.dashboard')}}">Dashboard</a></li>
            <li class="has-sub-menu-list">
                <a href="{{route('products.index')}}"><i class="fa fa-fw fa-angle-right is-pulled-right"></i> Products</a>
                <ul class="sub-menu-list">
                    <li><a href="{{route('products.create')}}">Add New Product</a></li>
                    <li><a href="">Stock Items</a></li>
                    <li><a href="">Upload CSV File</a></li>
                </ul>
            </li>
            <li class="has-sub-menu-list">
                <a href="{{route('users.index')}}"><i class="fa fa-fw fa-angle-right is-pulled-right"></i> Manage Users</a>
                <ul class="sub-menu-list">
                    <li><a href="{{route('roles.create')}}">Add New User</a></li>
                    <li><a href="{{route('users.index')}}">All Users</a></li>
                </ul>
            </li>
            <li class="has-sub-menu-list">
                <a href="{{route('permissions.index')}}"><i class="fa fa-fw fa-angle-right is-pulled-right"></i> Roles &amp; Permissions</a>
                <ul class="sub-menu-list">
                    <li><a href="{{route('roles.index')}}">Roles</a></li>
                    <li><a href="{{route('permissions.index')}}">Permissions</a></li>
                </ul>
            </li>
            <li class="has-sub-menu-list">
                <a href="{{route('inventory.index')}}"><i class="fa fa-fw fa-angle-right is-pulled-right"></i> Inventory </a>

                <ul class="sub-menu-list">
                    <li><a href="{{route('category.index')}}">Category</a></li>
                </ul>
            </li>
        </ul>
    </aside>
</div>
