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

            <!------------------------------------- Student Management System ------------------------------>

            <li class="dropdown">
                <a href="#" class="menu-toggle nav-link has-dropdown"><i
                        data-feather="user"></i><span>Students</span></a>
                <ul class="dropdown-menu">
                    <li>
                        <a class="nav-link" href="{{ route('admin.studentList') }}">Student List</a>
                    </li>
                    <li>
                        <a class="nav-link" href="{{ route('admin.addStudent') }}">Student Add</a>
                    </li>
                </ul>
            </li>

            <!------------------------------------- Teacher Management System ------------------------------>

            <li class="dropdown">
                <a href="#" class="menu-toggle nav-link has-dropdown"><i
                        data-feather="user"></i><span>Teachers</span></a>
                <ul class="dropdown-menu">
                    <li>
                        <a class="nav-link" href="{{ route('admin.teacherList') }}">Teacher List</a>
                    </li>
                    <li>
                        <a class="nav-link" href="{{ route('admin.addTeacher') }}">Teacher Add</a>
                    </li>
                </ul>
            </li>

            <!------------------------------------- Classes Management System ------------------------------>

            <li class="dropdown">
                <a href="#" class="menu-toggle nav-link has-dropdown"><i
                        data-feather="user"></i><span>Classes</span></a>
                <ul class="dropdown-menu">
                    <li>
                        <a class="nav-link" href="{{ route('admin.classesList') }}">Classes List</a>
                    </li>
                    <li>
                        <a class="nav-link" href="{{ route('admin.addClass') }}">Class Add</a>
                    </li>
                </ul>
            </li>

            <!------------------------------------- Attendence Management System --------------------------->

            <li class="menu-header">Attendence</li>
            <li class="dropdown">
                <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="users"></i><span>Student
                        Attendence</span></a>
                <ul class="dropdown-menu">
                    <li>
                        <a class="nav-link" href="./allClassesAttendence.html">
                            All Classes</a>
                    </li>
                </ul>
            </li>
            <li class="dropdown">
                <a class=" " href="./timetable.html"><i data-feather="grid"></i><span>Timetable</span></a>
            </li>

            <!------------------------------------- Fee Management System ---------------------------------->

            <li class="menu-header">Fee Management</li>

            <li class="dropdown">
                <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="dollar-sign"></i><span>Fee
                        Management</span></a>
                <ul class="dropdown-menu">
                    <li>
                        <a class="nav-link" href="./allStudentFee.html">All Student Fee</a>
                    </li>
                    <li>
                        <a class="nav-link" href="./invoice.html"> Student Fee</a>
                    </li>
                </ul>
            </li>

            <!------------------------------------- Fee Management System ---------------------------------->

            <li class="menu-header">Announcement</li>

            <!-- <li class="dropdown">
  <a href="./announcement.html" class=" nav-link has-dropdown"><i data-feather="clipboard"></i><span> 
      Announcement</span></a>
</li> -->
            <li class="dropdown">
                <a class=" " href="./announcement.html"><i data-feather="clipboard"></i><span>Announcement</span></a>
            </li>

            <!----------------------------------- Autherization Management System -------------------------->

            <li class="menu-header">Autherization</li>
            <li class="dropdown">
                <a href="#" class="menu-toggle nav-link has-dropdown"><i
                        data-feather="user-check"></i><span>Auth</span></a>
                <ul class="dropdown-menu">
                    <li><a href="./login.html">Login</a></li>
                </ul>
            </li>
        </ul>
    </aside>
</div>