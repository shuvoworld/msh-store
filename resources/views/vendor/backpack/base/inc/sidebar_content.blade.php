{{-- This file is used to store sidebar items, inside the Backpack admin panel --}}
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('dashboard') }}"><i class="la la-home nav-icon"></i>
           {{ trans('backpack::base.dashboard') }}
    </a></li>

@if (backpack_user()->hasRole('admin'))

@includeWhen(class_exists(\Backpack\DevTools\DevToolsServiceProvider::class),
    'backpack.devtools::buttons.sidebar_item')
<!-- Users, Roles, Permissions -->
<li class="nav-item nav-dropdown">
    <a class="nav-link nav-dropdown-toggle" href="#"><i class="nav-icon la la-users"></i> Authentication</a>
    <ul class="nav-dropdown-items">
        <li class="nav-item"><a class="nav-link" href="{{ backpack_url('user') }}"><i class="nav-icon la la-user"></i>
                <span>Users</span></a></li>
        <li class="nav-item"><a class="nav-link" href="{{ backpack_url('role') }}"><i
                    class="nav-icon la la-id-badge"></i> <span>Roles</span></a></li>
        <li class="nav-item"><a class="nav-link" href="{{ backpack_url('permission') }}"><i
                    class="nav-icon la la-key"></i> <span>Permissions</span></a></li>
    </ul>
</li>
@endif


<li class="nav-item"><a class="nav-link" href="{{ backpack_url('course') }}"><i class="nav-icon la la-home"></i>
        Courses</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('institution') }}"><i class="nav-icon la la-group"></i>
        Institutions</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('training-batch') }}"><i class="nav-icon la la-home"></i>
        Training batches</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('user') }}"><i class="nav-icon la la-key"></i> Users</a>
</li>
