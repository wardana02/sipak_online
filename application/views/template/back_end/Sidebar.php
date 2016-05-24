      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">

        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">

          <!-- Sidebar user panel (optional) -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src=<?=base_url("assets/img/logo-jateng.jpg");?> class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
              <p><?php echo $nama_user; ?></p>
              <!-- Status -->
              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>

          <!-- search form -->
          <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
              <input type="text" name="q" class="form-control" placeholder="Cari Data ..."/>
              <span class="input-group-btn">
                <button type='submit' name='seach' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
          </form>
          <!-- /.search form -->

          <!-- Sidebar Menu -->
          <ul class="sidebar-menu">
            <li class="header">Pelayanan Online !!</li>
            <!-- Optionally, you can add icons to the links -->

            <li class="">
              <a href=<?=base_url('index.php/dashboard');?>>
                <i class="glyphicon glyphicon-home"></i> <span>Dashboard</span>
              </a>
            </li>

            <?php if($status!='DUKCAPIL'){ ?>
            <li class="treeview <?php echo $ig;?>">
              <a href="#"> 
                <i class="glyphicon glyphicon-tags"></i> <span>Infografik</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li class="<?php echo $ig1;?>"><a href=<?=base_url("ig/AL");?>><i class="glyphicon glyphicon-inbox"></i> Infografik Akta Kelahiran</a></li>  
                <li class="<?php echo $ig2;?>"><a href=<?=base_url("ig/AM");?>><i class="glyphicon glyphicon-search"></i> Infografik Akta Kematian</a></li>  
                <li class="<?php echo $ig3;?>"><a href=<?=base_url("ig/AP");?>><i class="glyphicon glyphicon-check"></i> Infografik Akta Perkawinan</a></li>
                <li class="<?php echo $ig4;?>"><a href=<?=base_url("ig/AC");?>><i class="glyphicon glyphicon-gift"></i> Infografik Akta Perceraian</a></li>
              </ul>
            </li>

            <?php } if($status!='ADMIN'){ ?>
            <li class="treeview <?php echo $z;?>">  
              <a href=<?=base_url('#');?>>
                <i class="glyphicon glyphicon-shopping-cart"></i> <span> Verifikasi Online</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
              
                  <li class="<?php echo $z1;?>"><a href=<?=base_url("approval/index/AL");?>><i class="glyphicon glyphicon-leaf"></i> Akta Kelahiran</a></li>
                    <li class="<?php echo $z2;?>"><a href=<?=base_url("approval/index/AM");?>><i class="glyphicon glyphicon-plus-sign"></i> Akta Kematatian</a></li>
                    <li class="<?php echo $z3;?>"><a href=<?=base_url("approval/index/AP");?>><i class="glyphicon glyphicon-heart"></i> Akta Perkawinan</a></li>
                    <li class="<?php echo $z4;?>"><a href=<?=base_url("approval/index/AC");?>><i class="glyphicon glyphicon-fire"></i> Akta Perceraian</a></li>
                
              </ul>
            </li>

            <?php } if($status=='ADMIN'){ ?>
            <li class="treeview <?php echo $b;?>">
              <a href="#"> 
                <i class="glyphicon glyphicon-tower"></i> <span> Master Data</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li class="<?php echo $b1;?>"><a href=<?=base_url("data/import");?>><i class="glyphicon glyphicon-chevron-down"></i>Update Data</a></li>
                <li class="<?php echo $b3;?>"><a href=<?=base_url("data");?>><i class="glyphicon glyphicon-chevron-down"></i>Lihat Data</a></li>
                <li class="<?php echo $b4;?>"><a href=<?=base_url("parameter");?>><i class="glyphicon glyphicon-chevron-down"></i>Parameter</a></li>
                <li class="<?php echo $b3;?>"><a href=<?=base_url("data/hapus_data");?>><i class="glyphicon glyphicon-chevron-down"></i> Bersihkan Data Pendaftaran</a></li>
              </ul>
            </li>
            <?php } ?>


            <?php if(($status=='ADMIN') OR ($status=='CAPIL')){ ?>
            <li class="treeview <?php echo $d;?>">
              <a href="#"> 
                <i class="glyphicon glyphicon-tags"></i> <span>Layanan SMS Publik</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li class="<?php echo $d1;?>"><a href=<?=base_url("mail");?>><i class="glyphicon glyphicon-inbox"></i>Pesan Masuk</a></li>  
                <li class="<?php echo $d3;?>"><a href=<?=base_url("mail/smst");?>><i class="glyphicon glyphicon-search"></i>SMS Tracking</a></li>  
                <li class="<?php echo $d2;?>"><a href=<?=base_url("pbk");?>><i class="glyphicon glyphicon-check"></i> Kontak Tersimpan</a></li>
                <li class="<?php echo $d6;?>"><a href=<?=base_url("mail/broadcast");?>><i class="glyphicon glyphicon-gift"></i> Buat Pesan Masal</a></li>
                <li class="<?php echo $d4;?>"><a href=<?=base_url("mail/terkirim");?>><i class="glyphicon glyphicon-send"></i> Pesan Terkirim</a></li>
                <li class="<?php echo $d5;?>"><a href=<?=base_url("mail/pending");?>><i class="glyphicon glyphicon-floppy-open"></i> Pesan Menunggu</a></li>
              </ul>
            </li>
            

            

            <li class="treeview <?php echo $q;?>">
              <a href=<?=base_url("index.php/user");?>> 
                <i class="glyphicon glyphicon-tower"></i> <span>Data Admin & Aparatur</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li class="<?php echo $q2;?>"><a href=<?=base_url("user");?>><i class="glyphicon glyphicon-chevron-down"></i>Data Admin Sistem</a></li>  
              </ul>
            </li> 

            <?php } ?>

            <li class="treeview <?php echo $e;?>">
              <a href=<?=base_url('#');?>>
                <i class="glyphicon glyphicon-bullhorn"></i> <span> Bantuan & Informasi</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                
                
                <li class="<?php echo $e6;?>"><a href=<?=base_url("help/alur");?>><i class="glyphicon glyphicon-info-sign"></i> Alur Aplikasi</a></li>
                <li class="<?php echo $e2;?>"><a href=<?=base_url("help/verifikasi");?>><i class="glyphicon glyphicon-info-sign"></i> Mekanisme Verifikasi</a></li>
                <li class="<?php echo $e1;?>"><a href=<?=base_url("help/denda");?>><i class="glyphicon glyphicon-info-sign"></i> Denda Administrasi</a></li>
                <li class="<?php echo $e3;?>"><a href=<?=base_url("help/waktu");?>><i class="glyphicon glyphicon-info-sign"></i> Waktu Pembuatan</a></li>
                <li class="<?php echo $e4;?>"><a href=<?=base_url("help/lokasi");?>><i class="glyphicon glyphicon-info-sign"></i> Lokasi</a></li>
                
              </ul>
            </li>

           <li class="">
              <a href=<?=base_url('index.php/login/logout');?>>
                <i class="glyphicon glyphicon-eject"></i> <span>Keluar</span>
              </a>
            </li>

          </ul><!-- /.sidebar-menu -->
        </section>
        <!-- /.sidebar -->
      </aside>