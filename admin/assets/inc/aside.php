<?php 
    echo ' 
    <div class="ttr-sidebar">
    <div class="ttr-sidebar-wrapper content-scroll">
        <!-- side menu logo start -->
        <div class="ttr-sidebar-logo">
            <a href="#"><img alt="" src="assets/images/logo.png" width="122" height="27"></a>
            <!-- <div class="ttr-sidebar-pin-button" title="Pin/Unpin Menu">
                <i class="material-icons ttr-fixed-icon">gps_fixed</i>
                <i class="material-icons ttr-not-fixed-icon">gps_not_fixed</i>
            </div> -->
            <div class="ttr-sidebar-toggle-button">
                <i class="ti-arrow-left"></i>
            </div>
        </div>
        <!-- side menu logo end -->
        <!-- sidebar menu start -->
        <nav class="ttr-sidebar-navi">
            <ul>
                <li>
                    <a href="index.php" class="ttr-material-button">
                        <span class="ttr-icon"><i class="ti-home"></i></span>
                        <span class="ttr-label">Home</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="ttr-material-button">
                        <span class="ttr-icon"><i class="ti-email"></i></span>
                        <span class="ttr-label">Courses</span>
                        <span class="ttr-arrow-icon"><i class="fa fa-angle-down"></i></span>
                    </a>
                    <ul>
                        <li>
                            <a href="courses.php" class="ttr-material-button"><span class="ttr-label">Create Course </span></a>
                        </li>
                        <li>
                            <a href="manage-courses.php" class="ttr-material-button"><span
                                    class="ttr-label">Manage Courses</span></a>
                        </li>
                        
                    </ul>
                </li>
                <li>
                    <a href="lecturers.php" class="ttr-material-button">
                        <span class="ttr-icon"><i class="ti-email"></i></span>
                        <span class="ttr-label">Lecturers</span>
                        <span class="ttr-arrow-icon"><i class="fa fa-angle-down"></i></span>
                    </a>
                    <ul>
                        <li>
                            <a href="lecturers.php" class="ttr-material-button"><span class="ttr-label">Register Lecturer</span></a>
                        </li>
                        <li>
                            <a href="manage-lecturers.php" class="ttr-material-button"><span
                                    class="ttr-label">Manage Lecturer</span></a>
                        </li>
                       
                    </ul>
                </li>
                <li>
                    <a href="manage-student.php" class="ttr-material-button">
                        <span class="ttr-icon"><i class="ti-calendar"></i></span>
                        <span class="ttr-label">Student</span>
                        <span class="ttr-arrow-icon"><i class="fa fa-angle-down"></i></span>
                    </a>
                    <ul>
                        <li>
                            <a href="manage-student.php" class="ttr-material-button"><span class="ttr-label">Manage Students</span></a>
                        </li>
                        
                    </ul>
                </li>
                
                
                <li>
                    <a href="user-profile" class="ttr-material-button">
                        <span class="ttr-icon"><i class="ti-user"></i></span>
                        <span class="ttr-label">My Profile</span>
                        <span class="ttr-arrow-icon"><i class="fa fa-angle-down"></i></span>
                    </a>
                    <ul>
                    
                        <li>
                            <a href="user-profile.php" class="ttr-material-button"><span class="ttr-label">User
                                    Profile</span></a>
                        </li>
                        <li>
                            <a href="create-user.php" class="ttr-material-button"><span class="ttr-label">Create User</span></a>
                        </li>
                        <li>
                            <a href="manage-users.php" class="ttr-material-button"><span class="ttr-label">Manage Users</span></a>
                        </li>
                        <li>
                            <a href="logout.php" class="ttr-material-button"><span
                                    class="ttr-label">Logout</span></a>
                        </li>
                    </ul>
                </li>
                <li class="ttr-seperate"></li>
            </ul>
            <!-- sidebar menu end -->
        </nav>
        <!-- sidebar menu end -->
    </div>
</div>
    ';
?>