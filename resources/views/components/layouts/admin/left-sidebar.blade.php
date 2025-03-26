<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">


    <div class="app-brand demo ">
        <a href="javascript:void(0);" class="app-brand-link">
            <span class="app-brand-logo demo me-1">
                
            </span>
            <span class="app-brand-text demo menu-text fw-semibold ms-2">Materio</span>
        </a>
        
        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
            {{-- <i class="menu-toggle-icon d-xl-block align-middle"></i> --}}
        </a>
    </div>

    <div class="menu-inner-shadow"></div>



    <ul class="menu-inner py-1">
        <!-- Dashboards -->
        <li class="menu-item {{ (request()->is('admin/dashboard*')) ? 'active' : '' }}">
            <a href="{{ route('admin.dashboard') }}" class="menu-link">
                <i class="menu-icon tf-icons ri-home-smile-line"></i>
                <div data-i18n="Dashboards">Dashboards</div>
            </a>
        </li>

        <!-- Layouts -->
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link">
                <i class="menu-icon tf-icons ri-group-line"></i>
                <div data-i18n="Customers">Customers</div>
            </a>
        </li>

        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link">
                <i class='menu-icon tf-icons ri-vip-diamond-line'></i>
                <div data-i18n="Plans">Plans</div>
            </a>
        </li>
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link">
                <i class='menu-icon tf-icons ri-refresh-line'></i>
                <div data-i18n="Subscriptions">Subscriptions</div>
            </a>
        </li>

        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class='menu-icon tf-icons ri-bank-card-line'></i>
                <div data-i18n="Payments">Payments</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="javascript:;" class="menu-link">
                        <div data-i18n="Online">Online</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="javascript:;" class="menu-link">
                        <div data-i18n="Offline">Offline</div>
                    </a>
                </li>
            </ul>
        </li>

        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link">
                <i class='menu-icon tf-icons ri-time-line'></i>
                <div data-i18n="Events">Events</div>
            </a>
        </li>
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link">
                <i class='menu-icon tf-icons ri-user-add-line'></i>
                <div data-i18n="Users">Users</div>
            </a>
        </li>

        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class='menu-icon tf-icons ri-lock-2-line'></i>
                <div data-i18n="Roles & Permissions">Roles & Permissions</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="javascript:;" class="menu-link">
                        <div data-i18n="Roles">Roles</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="javascript:;" class="menu-link">
                        <div data-i18n="Permission">Permission</div>
                    </a>
                </li>
            </ul>
        </li>
        <li class="menu-item">
            <a href="javascript:;" class="menu-link">
                <i class='menu-icon tf-icons ri-image-line'></i>
                <div data-i18n="Settings">Frontend</div>
            </a>
        </li>
        <li class="menu-item {{ (request()->is('admin/settings*')) ? 'active' : '' }}">
            <a href="{{ route('admin.settings.index') }}" class="menu-link">
                <i class='menu-icon tf-icons ri-settings-2-line'></i>
                <div data-i18n="Settings">Settings</div>
            </a>
        </li>
    </ul>
</aside>