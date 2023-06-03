<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{ route('admin.dashboard') }}">
                <img alt="image" src="{{ asset('assets/img/logo.png') }}" class="header-logo" />
                <span class="logo-name">Angel</span>
            </a>
        </div>

        <!----------------------------------------- Dashboard -------------------------------------------->

        <ul class="sidebar-menu">
            <li class="menu-header">Main</li>
            <li class="dropdown active">
                <a href="{{ route('admin.dashboard') }}" class="nav-link"><i
                        data-feather="monitor"></i><span>Dashboard</span></a>
            </li>

            <!------------------------------------- Attendence Management System --------------------------->

            <li class="menu-header">Attendence</li>
            <li class="dropdown">
                <a href="{{ route('attendences') }}"><i data-feather="users"></i><span>Student
                        Attendences</span></a>
            </li>

            <li class="dropdown">
                <a href="{{ route('teacherTimetable') }}"><i data-feather="grid"></i><span>Timetable</span></a>
            </li>

            <li class="dropdown">
                <a href="{{ route('profile') }}"><i data-feather="user"></i><span>Profile</span></a>
            </li>


        </ul>
    </aside>
</div>