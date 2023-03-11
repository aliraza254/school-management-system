<div class="header">
    <div class="header-left">
    <a href="/" class="logo">
            <!-- <img src="assets/img/logo.png" alt="Logo"> -->
            <p class="m-0"><b>Bab-ul-Islam</b></p>
        </a>
        <a href="/" class="logo logo-small">
            <img src="assets/img/logo-small.png" alt="Logo" width="30" height="30">
        </a>
    </div>
    <a href="javascript:void(0);" id="toggle_btn">
        <i class="fas fa-align-left"></i>
    </a>
    <a class="mobile_btn" id="mobile_btn">
        <i class="fas fa-bars"></i>
    </a>
    <ul class="nav user-menu m-3">
        <form action="{{route('logout')}}" method="post">
            @csrf
            <button type="submit" class="dropdown-item">Logout</button>
        </form>
    </ul>
</div>

<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="menu-title">
                    <span>Main Menu</span>
                </li>
                <li class="">
                    <a href="/"><i class="fas fa-user-graduate"></i> <span> Admin Dashboard</span></a>
                </li>
                <li class="submenu">
                    <a href=""><i class="fas fa-user-graduate"></i> <span> Students</span> <span
                            class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="{{route('students.index')}}">Student List</a></li>
                    </ul>
                </li>
                <li class="submenu ">
                    <a href=""><i class="fas fa-chalkboard-teacher"></i> <span> Teachers</span> <span
                            class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="{{route('teachers.index')}}" class="">Teacher List</a></li>
                    </ul>
                </li>
<!--                Class Section -->
                <li class="submenu">
                    <a href=""><i class="fas fa-book-reader"></i> <span> Class</span> <span class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="{{route('classes.index')}}" class="">Class List</a></li>
                    </ul>
                </li>
                <li class="menu-title">
                    <span>Management</span>
                </li>
                <li class="submenu ">
                    <a href="#"><i class="fas fa-file-invoice-dollar"></i> <span> Accounts</span> <span
                            class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="{{route('fees.index')}}" >Fees Collection</a></li>
                        <li><a href="{{route('expenses.index')}}" class="">Expenses</a></li>
                        <li><a href="{{route('salary.index')}}">Salary</a></li>
                    </ul>
                </li>
                <li class="submenu ">
                    <a href="#"><i class="fas fa-file-invoice-dollar"></i> <span> Attendance</span> <span
                            class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="{{route('students-attendance.index')}}" >Student Attendance</a></li>
                        <li><a href="{{route('teacher-attendance.index')}}" class="">Teacher Attendance</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
