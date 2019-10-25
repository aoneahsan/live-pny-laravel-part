<section class="sidebar">
    <ul class="sidebar-menu">
        <li class="header">SideBar</li>
        <li>
            <a href="{{ url('/') }}">
                <i class="ion ion-ios-people"></i>
                <span>Dashboard</span>
            </a>
        </li>
        <li class="header">User Role Management</li>
        <li>
            <a href="{{ url('/check-role') }}">
                <i class="ion ion-ios-people"></i>
                <span>Check Role</span>
            </a>
        </li>
        <li class="header">User Management</li>
        <li class="treeview">
            <a href="#">
                <i class="ion ion-ios-people"></i>
                <span>Users</span>
                <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
                <li><a href="{{ url('admin/users') }}"><i class="fa fa-circle-o"></i> All Users</a></li>
                <li><a href="{{ url('admin/users/admins') }}"><i class="fa fa-circle-o"></i> Admin Users</a></li>                
                <li><a href="{{ url('admin/users/banned') }}"><i class="fa fa-circle-o"></i> Banned Users</a></li>
            </ul>
        </li>

        <li class="header">Enroll Student Management</li>
        <li class="treeview">
            <a href="#">
                <i class="ion ion-ios-list"></i>
                <span>Enroll Student</span>
                <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
                <li><a href="{{ url('/admin/student-enroll') }}"><i class="fa fa-circle-o"></i> All Enroll Student</a></li>
                <li><a href="{{ url('/admin/student-enroll/add-student') }}"><i class="fa fa-circle-o"></i>Add Student Feedback</a></li>
            </ul>
        </li>

        <li class="header">Site Forms Management</li>
        <li class="treeview">
            <a href="#">
                <i class="ion ion-ios-list"></i>
                <span>Site Forms</span>
                <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
                <li>
                    <a href="{{ url('/admin/site-forms') }}"><i class="fa fa-circle-o"></i> All Site Forms</a>
                </li>
                <li>
                    <a href="{{ url('/admin/subscribers') }}"><i class="fa fa-circle-o"></i> All Subscribers</a>
                </li>
            </ul>
        </li>

        <li class="header">Student Feedbacks Management</li>
        <li class="treeview">
            <a href="#">
                <i class="ion ion-ios-list"></i>
                <span>Student Feedbacks</span>
                <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
                <li><a href="{{ url('/admin/student-feedbacks') }}"><i class="fa fa-circle-o"></i> All Student Feedbacks</a></li>
                <li><a href="{{ url('/admin/student-feedbacks/create') }}"><i class="fa fa-circle-o"></i>Add Student Feedback</a></li>
            </ul>
        </li>

        <li class="header">FAQs Management</li>
        <li class="treeview">
            <a href="#">
                <i class="ion ion-ios-list"></i>
                <span>FAQs</span>
                <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
                <li><a href="{{ url('/admin/faq') }}"><i class="fa fa-circle-o"></i> All FAQs</a></li>
                <li><a href="{{ url('/admin/faq/create') }}"><i class="fa fa-circle-o"></i>Add FAQ</a></li>
            </ul>
        </li>

    </ul>
</section>