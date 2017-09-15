<div class="side-menu">
    <aside class="menu m-t-30 m-l-10">
        <ul class="menu-list">
            <p class="menu-label">Administration</p>
            <li><a href="{{route('manage.dashboard')}}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li class="has-sub-menu-list">
                <a href="{{route('products.index')}}"><i class="fa fa-fw fa-angle-right is-pulled-right"></i><i class="fa fa-shopping-bag"></i> Products</a>
                <ul class="sub-menu-list">
                    <li><a href="{{route('products.create')}}">Add New Product</a></li>
                    <li><a href="">Stock Items</a></li>
                    <li><a href="">Upload CSV File</a></li>
                    <li><a  href="">Category</a></li>
                </ul>
            </li>
            <li class="has-sub-menu-list">
                <a href="{{route('products.index')}}"><i class="fa fa-fw fa-angle-right is-pulled-right"></i><i class="fa fa-calendar" aria-hidden="true"></i> Daily Oprations</a>
                <ul class="sub-menu-list">
                    <li><a href="">Manage Price List</a></li>
                    <li><a href="">Print Prodict Pricing</a></li>
                    <li><a href="">Price Proof List</a></li>
                    <li class="separator"></li>
                    <li><a href="">Manage Upsell</a></li>
                    <li><a href="">Search Upsell</a></li>
                    <li class="separator"></li>
                    <li><a href="">Cashier Declaration</a></li>
                </ul>
            </li>
            
            <p class="menu-label">Human Resource</p>
            <li class="has-sub-menu-list">
                <a href="{{route('users.index')}}"><i class="fa fa-fw fa-angle-right is-pulled-right"></i> Employee</a>
                <ul class="sub-menu-list">
                    <li><a href="{{route('roles.create')}}">Add New Employee</a></li>
                    <li><a href="">Upload CSV Employee File</a></li>
                </ul>
            </li>
            <li class="has-sub-menu-list">
                <a href="{{route('users.index')}}"><i class="fa fa-fw fa-angle-right is-pulled-right"></i> Payroll</a>
                <ul class="sub-menu-list">
                    <li><a href="{{route('roles.create')}}">Employee's Payroll</a></li>
                </ul>
            </li>

            <p class="menu-label">Management</p>
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
