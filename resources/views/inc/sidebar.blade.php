<ul class="vertical-nav-menu">
    <li class="app-sidebar__heading">Dashboards</li>
    <li>
        <a href="{{ route('app.dashboard') }}" class="{{ Request::is('app/dashboard') ? 'mm-active' : '' }}">
            <i class="metismenu-icon pe-7s-rocket"></i>
            Dashboard Example 1
        </a>
    </li>
    <li>
        <a href="{{ route('app.roles.index') }}" class="{{ Request::is('app/roles*') ? 'mm-active' : '' }}">
            <i class="metismenu-icon pe-7s-check"></i>
            Roles
        </a>
    </li>
</ul>