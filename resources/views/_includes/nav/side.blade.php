<div class="side-menu">
    <aside class="menu m-t-30 m-l-10">
        <p class="menu-label">Administration</p>
        <ul class="menu-list">
            <li><a href="{{route('manage.dashboard')}}">Dashboard</a></li>
            <li><a href="{{route('users.index')}}">Manage Users</a></li>
            <li>
                <a href="{{route('permissions.index')}}">Roles &amp; Permissions</a>
                <ul class="sub-menu-list">
                    <li><a href="{{route('roles.index')}}">Roles</a></li>
                    <li><a href="{{route('permissions.index')}}">Permissions</a></li>
                </ul>
            </li>
            <li>
                <a href="{{route('inventory.index')}}">Inventory</a>
                <ul>
                    <li><a href="{{route('category.index')}}">Category</a></li>
                </ul>
            </li>
        </ul>
    </aside>
</div>
