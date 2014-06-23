<!-- Left side column. contains the logo and sidebar -->
    <aside class="left-side sidebar-offcanvas">                
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            <!-- Sidebar user panel -->
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="<?php echo base_url(); ?>assets/admin/images/<?php echo $this->session->userdata('images'); ?>" class="img-circle" alt="User Image" />
                </div>
                <div class="pull-left info">
                    <p>
                        Hello,
                        <br>
                        <span class="text-primary"><?php echo $this->session->userdata('admin'); ?></span>
                    </p>
                </div>
                <div class="pull-left">
                    <p style="font-size: 12px;">
                        <small>Ini Adalah
                            <span class="text-info">aNPanel v1.0</span>
                            Terimakasih Atas Kepercayaan Yang Telah Anda Berikan
                        </small>
                    </p>
                </div>
            </div>
            <!-- search form -->
            <!-- <form action="#" method="get" class="sidebar-form">
                <div class="input-group">
                    <input type="text" name="q" class="form-control" placeholder="Search..."/>
                    <span class="input-group-btn">
                        <button type='submit' name='seach' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                    </span>
                </div>
            </form> -->
            <!-- /.search form -->
            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu">
                <li <?php if(isset($active) && $active == 'dashboard'){ echo 'class="activenew"';} ?>>
                    <a href="<?php echo base_url().'administrator' ?>">
                        <span>
                            <i class="fa fa-dashboard"></i>
                            Dashboard
                         </span>                                
                    </a>
                </li>
                <li <?php if(isset($active) && $active == 'artikel'){ echo 'class="activenew treeview active"'; } else { echo 'class="treeview"'; } ?> >
                    <a href="#">
                        <span>
                            <i class="fa fa-list"></i>
                            Artikel
                        </span>
                        <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="<?php echo base_url().'ad_artikel/create' ?>"><i class="fa fa-angle-double-right"></i> Buat Baru</a></li>
                        <li><a href="<?php echo base_url().'ad_artikel/' ?>"><i class="fa fa-angle-double-right"></i> Data Artikel</a></li>
                        <!-- <li><a href="#"><i class="fa fa-angle-double-right"></i> Kategori</a></li>
                        <li><a href="#"><i class="fa fa-angle-double-right"></i> Tags </a></li> -->
                    </ul>
                </li>
<!--                 <li>
                    <a href="index.html">
                        <span>
                            <i class="fa fa-copy"></i>
                            Halaman
                         </span>                                
                    </a>
                </li>
                 <li>
                    <a href="index.html">
                        <span>
                            <i class="fa fa-camera-retro "></i>
                            Media
                         </span>
                        
                    </a>
                </li> -->
                <li <?php if(isset($active) && $active == 'user'){ echo 'class="activenew"';} ?>>
                    <a href="<?php echo base_url().'ad_user' ?>">
                        <span>
                            <i class="fa fa-coffee"></i>
                            User
                         </span>
                        
                    </a>
                </li>
                <!-- <li>
                    <a href="index.html">
                        <span>
                            <i class="fa  fa-cogs"></i>
                            Pengaturan
                         </span>
                    </a>
                </li> -->
            </ul>
        </section>
        <!-- /.sidebar -->
    </aside>