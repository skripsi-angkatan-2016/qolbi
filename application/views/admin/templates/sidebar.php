<!-- ========== Left Sidebar Start ========== -->
<div class="left-side-menu">
    <div class="slimscroll-menu">
        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <ul class="metismenu" id="side-menu">
                <li class="menu-title">Menu <?=$this->session->userdata('role');?></li>
                <?php if(($this->session->userdata('role')=="pengadaan") || ($this->session->userdata('role')=="administrator")){?>
                    <li>
                        <a href="<?=base_url('index.php/adminberanda')?>">
                            <i class="la la-dashboard"></i>
                            <span> Dashboards </span>
                        </a>
                    </li>
                    <li>
                        <a href="<?=base_url('index.php/lelang')?>">
                            <i class="la la-users"></i>
                            <span> Lelang </span>
                        </a>
                    </li>
                    <li>
                        <a href="<?=base_url('index.php/proyek')?>">
                            <i class="la la-users"></i>
                            <span> Proyek </span>
                        </a>
                    </li>
                    <li>
                    <a href="<?=base_url('index.php/vendor')?>">
                        <i class="la la-users"></i>
                        <span> Vendor </span>
                    </a>
                    </li>
                        <li>
                        <a href="<?=base_url('index.php/admin')?>">
                            <i class="la la-users"></i>
                            <span> Admin </span>
                        </a>
                    </li>
                <?php } ?>
                <?php if(($this->session->userdata('role')=="pemeriksa") || ($this->session->userdata('role')=="pembayaran")){?>
                    <li>
                        <a href="<?=base_url('index.php/lelang')?>">
                            <i class="la la-users"></i>
                            <span> Lelang </span>
                        </a>
                    </li>
                <?php } ?>

             
            </ul>

        </div>
        <!-- End Sidebar -->

        <div class="clearfix"></div>
    </div>
    <!-- Sidebar -left -->
</div>

<!-- Left Sidebar End -->
   <div class="content-page">
        <div class="content">
            <!-- Start Content-->
            <div class="container-fluid">