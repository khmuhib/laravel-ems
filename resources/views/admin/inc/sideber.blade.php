<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <div class="sidebar-brand-text mx-3"><img class="main_logo_img" src="{{ asset('./admin/img/logo.png') }}" alt=""></div>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('dashboard.index') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Interface
    </div>

    <!-- Nav Item - Pages Collapse Menu -->

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#patient" aria-expanded="true"
            aria-controls="patient">
            <i class="fas fa-fw fa-cog"></i>
            <span>Patients</span>
        </a>
        <div id="patient" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Patients Components:</h6>
                <a class="collapse-item" href="{{ route('admin.patient.list') }}">Patients list</a>
                <a class="collapse-item" href="{{ route('admin.patient.create') }}">Patient create</a>
            </div>
        </div>
    </li>


    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#doctor" aria-expanded="true"
            aria-controls="doctor">
            <i class="fas fa-fw fa-cog"></i>
            <span>Doctors</span>
        </a>
        <div id="doctor" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Doctor Components:</h6>
                <a class="collapse-item" href="{{ route('admin.doctor.list') }}">Doctor list</a>
                <a class="collapse-item" href="{{ route('admin.doctor.create') }}">Doctor create</a>
            </div>
        </div>
    </li>


    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#appointment" aria-expanded="true"
            aria-controls="appointment">
            <i class="fas fa-fw fa-cog"></i>
            <span>Set Appointment</span>
        </a>
        <div id="appointment" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Doctor Appointment:</h6>
                <a class="collapse-item" href="{{ route('admin.appointment.list') }}">Appointment list</a>
                <a class="collapse-item" href="{{ route('admin.appointment.create') }}">Appointment create</a>
            </div>
        </div>
    </li>





    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#group" aria-expanded="true"
            aria-controls="group">
            <i class="fas fa-fw fa-cog"></i>
            <span>Department</span>
        </a>
        <div id="group" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Department Components:</h6>
                <a class="collapse-item" href="{{ route('department.index') }}">Department list</a>
                <a class="collapse-item" href="{{ route('department.create') }}">Department create</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Designation</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Designation Components:</h6>
                <a class="collapse-item" href="{{ route('designation.index') }}">Designation list</a>
                <a class="collapse-item" href="{{ route('designation.create') }}">Designation create</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#product" aria-expanded="true"
            aria-controls="product">
            <i class="fas fa-fw fa-cog"></i>
            <span>Employee</span>
        </a>
        <div id="product" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Employee Components:</h6>
                <a class="collapse-item" href="{{ route('employee.index') }}">Employee List</a>
                <a class="collapse-item" href="{{ route('employee.create') }}">Employee Create</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#category" aria-expanded="true"
            aria-controls="category">
            <i class="fas fa-fw fa-cog"></i>
            <span>Skills</span>
        </a>
        <div id="category" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Skill Components:</h6>
                <a class="collapse-item" href="{{ route('skill.index') }}">Skills List</a>
                <a class="collapse-item" href="{{ route('skill.create') }}">Skills Create</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
            aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-fw fa-wrench"></i>
            <span>Projects</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Projects Components:</h6>
                <a class="collapse-item" href="{{ route('project.index') }}">Projects List</a>
                <a class="collapse-item" href="{{ route('project.create') }}">Projects Create</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#role"
            aria-expanded="true" aria-controls="role">
            <i class="fas fa-fw fa-wrench"></i>
            <span>Role In Project</span>
        </a>
        <div id="role" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Projects Role:</h6>
                <a class="collapse-item" href="{{ route('role.index') }}">Role List</a>
                <a class="collapse-item" href="{{ route('role.create') }}">Role Create</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#bookCategory"
            aria-expanded="true" aria-controls="bookCategory">
            <i class="fas fa-fw fa-wrench"></i>
            <span>Book Cateogry</span>
        </a>
        <div id="bookCategory" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Books:</h6>
                <a class="collapse-item" href="{{ route('admin.book.category.list') }}">Book Category List</a>
                <a class="collapse-item" href="{{ route('admin.book.category.create') }}">Book Category Create</a>
            </div>
        </div>
    </li>


    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#books"
            aria-expanded="true" aria-controls="books">
            <i class="fas fa-fw fa-wrench"></i>
            <span>Books</span>
        </a>
        <div id="books" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Books:</h6>
                <a class="collapse-item" href="{{ route('admin.book.list') }}">Book List</a>
                <a class="collapse-item" href="{{ route('admin.book.create') }}">Book Create</a>
            </div>
        </div>
    </li>


    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#students"
            aria-expanded="true" aria-controls="students">
            <i class="fas fa-fw fa-wrench"></i>
            <span>Student</span>
        </a>
        <div id="students" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Student:</h6>
                <a class="collapse-item" href="{{ route('admin.student.list') }}">Student List</a>
                <a class="collapse-item" href="{{ route('admin.student.create') }}">Student Create</a>
            </div>
        </div>
    </li>


    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#contributor"
            aria-expanded="true" aria-controls="contributor">
            <i class="fas fa-fw fa-wrench"></i>
            <span>Contributor</span>
        </a>
        <div id="contributor" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Contributor:</h6>
                <a class="collapse-item" href="{{ route('admin.contributor.list') }}">Contributor List</a>
                <a class="collapse-item" href="{{ route('admin.contributor.create') }}">Contributor Create</a>
            </div>
        </div>
    </li>


{{--     <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Addons
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item active">
        <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true"
            aria-controls="collapsePages">
            <i class="fas fa-fw fa-folder"></i>
            <span>Pages</span>
        </a>
        <div id="collapsePages" class="collapse show" aria-labelledby="headingPages"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Login Screens:</h6>
                <a class="collapse-item" href="login.html">Login</a>
                <a class="collapse-item" href="register.html">Register</a>
                <a class="collapse-item" href="forgot-password.html">Forgot Password</a>
                <div class="collapse-divider"></div>
                <h6 class="collapse-header">Other Pages:</h6>
                <a class="collapse-item" href="404.html">404 Page</a>
                <a class="collapse-item active" href="blank.html">Blank Page</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Charts -->
    <li class="nav-item">
        <a class="nav-link" href="charts.html">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Charts</span></a>
    </li>

    <!-- Nav Item - Tables -->
    <li class="nav-item">
        <a class="nav-link" href="tables.html">
            <i class="fas fa-fw fa-table"></i>
            <span>Tables</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block"> --}}

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->
