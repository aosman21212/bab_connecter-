<li class="nav-item {{ Request::is('businesses*') ? 'active' : '' }}">
    <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#" aria-expanded="false">
        <i class="bi bi-menu-button-wide"></i>
        <span>Business</span>
        <i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="components-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav"> 
        <li>
            <a href="{{ route('businesses.index') }}" class="{{ Request::is('businesses') ? 'active' : '' }}">
                <i class="bi bi-circle"></i>
                <span>View Business</span>
            </a>
        </li>
        <li>
            <a href="{{ route('businesses.create') }}" class="{{ Request::is('businesses/create') ? 'active' : '' }}">
                <i class="bi bi-circle"></i>
                <span>Add Business</span>
            </a>
        </li>
    </ul>
</li>

<li class="nav-item {{ Request::is('channels*') ? 'active' : '' }}">
    <a class="nav-link collapsed" data-bs-target="#channels-nav" data-bs-toggle="collapse" href="#" aria-expanded="false">
        <i class="bi bi-menu-button-wide"></i>
        <span>Channels</span>
        <i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="channels-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
        <li>
            <a href="{{ route('channels.index') }}" class="{{ Request::is('channels') ? 'active' : '' }}">
                <i class="bi bi-circle"></i>
                <span>View Channels</span>
            </a>
        </li>
        <li>
            <a href="{{ route('channels.create') }}" class="{{ Request::is('channels/create') ? 'active' : '' }}">
                <i class="bi bi-circle"></i>
                <span>Add Channels</span>
            </a>
        </li>
    </ul>
</li>

<li class="nav-item {{ Request::is('conversations*') ? 'active' : '' }}">
    <a class="nav-link collapsed" data-bs-target="#conversations-nav" data-bs-toggle="collapse" href="#" aria-expanded="false">
        <i class="bi bi-menu-button-wide"></i>
        <span>Conversations</span>
        <i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="conversations-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
        <li>
            <a href="{{ route('conversations.index') }}" class="{{ Request::is('conversations') ? 'active' : '' }}">
                <i class="bi bi-circle"></i>
                <span>View Conversations</span>
            </a>
        </li>
        <li>
            <a href="{{ route('conversations.create') }}" class="{{ Request::is('conversations/create') ? 'active' : '' }}">
                <i class="bi bi-circle"></i>
                <span>Add Conversations</span>
            </a>
        </li>
    </ul>
</li>


<li class="nav-item {{ Request::is('media*') ? 'active' : '' }}">
    <a class="nav-link collapsed" data-bs-target="#media-nav" data-bs-toggle="collapse" href="#" aria-expanded="false">
        <i class="bi bi-menu-button-wide"></i>
        <span>Media</span>
        <i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="media-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
        <li>
            <a href="{{ route('media.index') }}" class="{{ Request::is('media') ? 'active' : '' }}">
                <i class="bi bi-circle"></i>
                <span>View Media</span>
            </a>
        </li>
        <li>
            <a href="{{ route('media.create') }}" class="{{ Request::is('media/create') ? 'active' : '' }}">
                <i class="bi bi-circle"></i>
                <span>Add Media</span>
            </a>
        </li>
    </ul>
</li>

<li class="nav-item {{ Request::is('locations*') ? 'active' : '' }}">
    <a class="nav-link collapsed" data-bs-target="#locations-nav" data-bs-toggle="collapse" href="#" aria-expanded="false">
        <i class="bi bi-menu-button-wide"></i>
        <span>Locations</span>
        <i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="locations-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
        <li>
            <a href="{{ route('locations.index') }}" class="{{ Request::is('locations') ? 'active' : '' }}">
                <i class="bi bi-circle"></i>
                <span>View Locations</span>
            </a>
        </li>
        <li>
            <a href="{{ route('locations.create') }}" class="{{ Request::is('locations/create') ? 'active' : '' }}">
                <i class="bi bi-circle"></i>
                <span>Add Locations</span>
            </a>
        </li>
    </ul>
</li>

<li class="nav-item {{ Request::is('redcrescents*') ? 'active' : '' }}">
    <a class="nav-link collapsed" data-bs-target="#redcrescents-nav" data-bs-toggle="collapse" href="#" aria-expanded="false">
        <i class="bi bi-menu-button-wide"></i>
        <span>Red Crescents</span>
        <i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="redcrescents-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
        <li>
            <a href="{{ route('redcrescents.index') }}" class="{{ Request::is('redcrescents') ? 'active' : '' }}">
                <i class="bi bi-circle"></i>
                <span>View Red Crescents</span>
            </a>
        </li>
        <li>
            <a href="{{ route('redcrescents.create') }}" class="{{ Request::is('redcrescents/create') ? 'active' : '' }}">
                <i class="bi bi-circle"></i>
                <span>Add Red Crescents</span>
            </a>
        </li>
    </ul>
</li>

<li class="nav-item {{ Request::is('messages*') ? 'active' : '' }}">
    <a class="nav-link collapsed" data-bs-target="#messages-nav" data-bs-toggle="collapse" href="#" aria-expanded="false">
        <i class="bi bi-menu-button-wide"></i>
        <span>Messages</span>
        <i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="messages-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
        <li>
            <a href="{{ route('messages.index') }}" class="{{ Request::is('messages') ? 'active' : '' }}">
                <i class="bi bi-circle"></i>
                <span>View Messages</span>
            </a>
        </li>
        <li>
            <a href="{{ route('messages.create') }}" class="{{ Request::is('messages/create') ? 'active' : '' }}">
                <i class="bi bi-circle"></i>
                <span>Add Messages</span>
            </a>
        </li>
    </ul>
</li>

<li class="nav-item {{ Request::is('stctemplates*') ? 'active' : '' }}">
    <a class="nav-link collapsed" data-bs-target="#stctemplates-nav" data-bs-toggle="collapse" href="#" aria-expanded="false">
        <i class="bi bi-menu-button-wide"></i>
        <span>STC Templates</span>
        <i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="stctemplates-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
        <li>
            <a href="{{ route('stctemplates.index') }}" class="{{ Request::is('stctemplates') ? 'active' : '' }}">
                <i class="bi bi-circle"></i>
                <span>View STC Templates</span>
            </a>
        </li>
        <li>
            <a href="{{ route('stctemplates.create') }}" class="{{ Request::is('stctemplates/create') ? 'active' : '' }}">
                <i class="bi bi-circle"></i>
                <span>Add STC Templates</span>
            </a>
        </li>
    </ul>
</li>

<li class="nav-item {{ Request::is('stcusers*') ? 'active' : '' }}">
    <a class="nav-link collapsed" data-bs-target="#stcusers-nav" data-bs-toggle="collapse" href="#" aria-expanded="false">
        <i class="bi bi-menu-button-wide"></i>
        <span>STC Users</span>
        <i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="stcusers-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
        <li>
            <a href="{{ route('stcusers.index') }}" class="{{ Request::is('stcusers') ? 'active' : '' }}">
                <i class="bi bi-circle"></i>
                <span>View STC Users</span>
            </a>
        </li>
        <li>
            <a href="{{ route('stcusers.create') }}" class="{{ Request::is('stcusers/create') ? 'active' : '' }}">
                <i class="bi bi-circle"></i>
                <span>Add STC Users</span>
            </a>
        </li>
    </ul>
</li>



<li class="nav-item">
    <a href="{{ route('users.index') }}" class="nav-link {{ Request::is('users') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <span>Users</span>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('users.index') }}" class="nav-link {{ Request::is('users*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>@lang('models/users.plural')</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('roles.index') }}" class="nav-link {{ Request::is('roles*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>@lang('models/roles.plural')</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('permissions.index') }}" class="nav-link {{ Request::is('permissions*') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>@lang('models/permissions.plural')</p>
    </a>
</li>
