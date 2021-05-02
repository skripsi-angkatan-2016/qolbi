<!-- Topbar Start -->
<div class="navbar-custom">
    <ul class="list-unstyled topnav-menu float-right mb-0">
        <li class="dropdown notification-list">
            <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                <img src="https://ui-avatars.com/api/?name=<?=$this->session->userdata('nama')?>" alt="user-image" class="rounded-circle">
                <span class="pro-user-name ml-1">
                <?=$this->session->userdata('nama');?>   <i class="mdi mdi-chevron-down"></i> 
                </span>
            </a>
            <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                <!-- item-->
                <div class="dropdown-item noti-title">
                    <h5 class="m-0 text-white">
                        Welcome !
                    </h5>
                </div>              

                <div class="dropdown-divider"></div>

                <!-- item-->
                <a href="<?=base_url('index.php/loginadmin/logout')?>" class="dropdown-item notify-item">
                    <i class="fe-log-out"></i>
                    <span>Logout</span>
                </a>

            </div>
        </li>
    </ul>

    <!-- LOGO -->
    <div class="logo-box">
        <a href="" class="logo text-center">
            <span class="logo-lg">
                <img src="<?=base_url('assets/logo.png')?>" alt="" height="50">
                <!-- <span class="logo-lg-text-light">Upvex</span> -->
            </span>
            <span class="logo-sm">
                <!-- <span class="logo-sm-text-dark">X</span> -->
                <img src="<?=base_url('assets/logo.png')?>" alt="" height="50">
            </span>
        </a>
    </div>

    <ul class="list-unstyled topnav-menu topnav-menu-left m-0">
        <li>
            <button class="button-menu-mobile waves-effect">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </li>
    </ul>
</div>
<!-- end Topbar -->