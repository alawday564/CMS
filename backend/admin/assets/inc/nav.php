<?php
    $aid=$_SESSION['ad_id'];
    $ret="select * from his_admin where ad_id=?";
    $stmt= $connect->prepare($ret) ;
    $stmt->bind_param('i',$aid);
    $stmt->execute() ;//ok
    $res=$stmt->get_result();
    //$cnt=1;
    while($row=$res->fetch_object())
    {
?>
    <div class="navbar-custom">
        <ul class="list-unstyled topnav-menu float-right mb-0">

            <li class="d-none d-sm-block">
                <form class="app-search">
                    <div class="app-search-box">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search...">
                            <div class="input-group-append">
                                <button class="btn" type="submit">
                                    <i class="fe-search"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </li>

            
            <li class="dropdown notification-list">
                <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                    <img src="assets/images/users/<?php echo $row->ad_dpic;?>" alt="dpic" class="rounded-circle">
                    <span class="pro-user-name ml-1">
                        <?php echo $row->ad_fname;?> <?php echo $row->ad_lname;?> <i class="mdi mdi-chevron-down"></i> 
                    </span>
                </a>
                <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                    <!-- item-->
                    <!-- <div class="dropdown-header noti-title">
                        <h6 class="text-overflow m-0">Welcome !</h6>
                    </div> -->

                    <!-- item-->
                    <!-- <a href="0_his_admin_account.php" class="dropdown-item notify-item">
                        <i class="fe-user"></i>
                        <span>My Account</span>
                    </a> -->


                    <!-- <div class="dropdown-divider"></div> -->

                    <!-- item-->
                    <a href="0_his_admin_logout_partial.php" class="dropdown-item notify-item">
                        <i class="fe-log-out"></i>
                        <span>Logout</span>
                    </a>

                </div>
            </li>

           

        </ul>

        <!-- LOGO -->
        <div class="logo-box">
            <a href="0_his_admin_tongquan.php" class="logo text-center">
                <span class="logo-lg">
                    <img src="assets/images/logo-light.png" alt="" height="18">
                    <!-- <span class="logo-lg-text-light">UBold</span> -->
                </span>
                <span class="logo-sm">
                    <!-- <span class="logo-sm-text-dark">U</span> -->
                    <img src="assets/images/logo-sm-white.png" alt="" height="24">
                </span>
            </a>
        </div>

        <ul class="list-unstyled topnav-menu topnav-menu-left m-0">
            <li>
                <button class="button-menu-mobile waves-effect waves-light">
                    <i class="fe-menu"></i>
                </button>
            </li>

            <li class="dropdown d-none d-lg-block">
                <a class="nav-link dropdown-toggle waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                    Create..
                    <i class="mdi mdi-chevron-down"></i> 
                </a>
                <div class="dropdown-menu">
                    <!-- item-->
                    <a href="1_his_admin_them_NV.php" class="dropdown-item">
                        <i class="fe-users mr-1"></i>
                        <span>Employee</span>
                    </a>

                    <!-- item-->
                    <a href="2_his_admin_dangki_BN.php" class="dropdown-item">
                        <i class="fe-activity mr-1"></i>
                        <span>Patient</span>
                    </a>

                    <!-- item-->
                    <a href="7_his_admin_them_Luong.php" class="dropdown-item">
                        <i class="fe-layers mr-1"></i>
                        <span>Payrolls</span>
                    </a>

                     <!-- item-->
                    <a href="6_his_admin_them_1BenhAN.php" class="dropdown-item">
                        <i class="fe-list mr-1"></i>
                        <span>Medical Records</span>
                    </a>
                </div>
            </li>

        </ul>
    </div>
<?php }?>