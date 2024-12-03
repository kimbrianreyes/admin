<style>
.navbar-search input {
    width: 300px;
}

.input-group-addon {
    background-color: #fff;
    border: none;
}
</style>


<header class="main-header" style="background-color: #FFFFFF;">
    <a href="home.php" class="logo" style="background-color: #FFFFFF;">
        <span class="logo-mini">
            <img src="../images/smallogo.png" style="width: 30px; height: 30px;">
        </span>

        <span class="logo-lg">
            <img src="../images/largelogo.png" style="width: 185px; height: 43px;">
        </span>
    </a>
    <nav class="navbar navbar-static-top"
        style="background-color: #FFFFFF; display: flex; align-items: center; justify-content: space-between;">
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button" style="color: #182073;">
            <span class="sr-only">Toggle navigation</span>
        </a>

        <div class="navbar-search" style="flex-grow: 1; text-align: center;">
            <form class="form-inline">
                <div class="input-group">

                    <span class="input-group-addon">
                        <i class="fa fa-search"></i>
                    </span>
                    <input type="text" class="form-control" placeholder="Search..." style="border-radius: 10px;">
                </div>
            </form>
        </div>

        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="background-color: #FFFFFF;">
                        <img src="<?php echo (!empty($user['photo'])) ? '../images/'.$user['photo'] : '../images/profile.jpg'; ?>"
                            class="user-image" alt="User Image">
                        <span class="hidden-xs" style="color: black;">
                            <?php echo $user['firstname'].' '.$user['lastname']; ?>
                        </span>
                    </a>
                    <ul class="dropdown-menu" style="background-color: #FFFFFF;">
                        <li class="user-header" style="background-color: #FFFFFF;">
                            <img src="<?php echo (!empty($user['photo'])) ? '../images/'.$user['photo'] : '../images/profile.jpg'; ?>"
                                class="img-circle" alt="User Image">
                            <p style="color: black;">
                                <?php echo $user['firstname'].' '.$user['lastname']; ?>
                                <small>Member since <?php echo date('M. Y', strtotime($user['created_on'])); ?></small>
                            </p>
                        </li>
                        <li class="user-footer" style="background-color: #FFFFFF;">
                            <div class="pull-left">
                                <a href="#profile" data-toggle="modal" class="btn btn-default btn-flat"
                                    id="admin_profile" style="background-color: #182073; color: white;">Update</a>
                            </div>
                            <div class="pull-right">
                                <a href="logout.php" class="btn btn-default btn-flat"
                                    style="background-color: #182073; color: white;">Sign out</a>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>

</header>
<?php include 'includes/profile_modal.php'; ?>