<style>
.header {
    background-color: #FFFFFF;
}

.main-sidebar .sidebar-menu li a:hover {
    background-color: #484f98;
    color: white;
    /* Keep text color white for contrast */
}

.main-sidebar .sidebar-menu li.active a {
    background-color: #484f98;

}
</style>


<aside class="main-sidebar" style="background-color: #121959;">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?php echo (!empty($user['photo'])) ? '../images/'.$user['photo'] : '../images/profile.jpg'; ?>"
                    class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p><?php echo $user['firstname'].' '.$user['lastname']; ?></p>
                <a><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header" style="background-color: #121959; color: white;">REPORTS</li>
            <li class=""><a href="home.php"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
            <li class="header" style="background-color: #121959; color: white;">MANAGE</li>

            <li><a href="attendance.php"><i class="fa fa-calendar"></i> <span>Attendance</span></a></li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-users"></i>
                    <span>Employees</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="employee.php"><i class="fa fa-circle-o"></i> Employee List</a></li>
                    <li><a href="overtime.php"><i class="fa fa-circle-o"></i> Overtime</a></li>
                    <li><a href="cashadvance.php"><i class="fa fa-circle-o"></i> Cash Advance</a></li>
                    <li><a href="schedule.php"><i class="fa fa-circle-o"></i> Schedules</a></li>
                </ul>
            </li>
            <li><a href="deduction.php"><i class="fa fa-file-text"></i> Deductions</a></li>
            <li><a href="position.php"><i class="fa fa-suitcase"></i> Positions</a></li>
            <li><a href="request.php"><i class="fa fa-paper-plane-o"></i> Request</a></li>
            <li><a href="approved_items.php"><i class="fa fa-paper-plane-o"></i> Approved Items</a></li>
            <li class="header" style="background-color: #121959; color: white;">PRINTABLES</li>
            <li><a href="payroll.php"><i class="fa fa-files-o"></i> <span>Payroll</span></a></li>
            <li><a href="schedule_employee.php"><i class="fa fa-clock-o"></i> <span>Schedule</span></a></li>
        </ul>
    </section>
</aside>