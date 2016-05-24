<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">
    <meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <link rel="shortcut icon" href=<?=base_url("assets/frontend2/img/fava.png");?>>

    <title>Aplikasi Akta Online || Kota Surakarta</title>

    
    <script src=<?=base_url("assets/js/jquery-2.1.4.min.js");?>></script>

    <link href=<?=base_url("assets/frontend2/css/bootstrap.min.css");?> rel="stylesheet">
    <link href=<?=base_url("assets/frontend2/css/theme.css");?> rel="stylesheet">
    <link href=<?=base_url("assets/frontend2/css/bootstrap-reset.css");?> rel="stylesheet">
    <link href=<?=base_url("assets/frontend2/css/topa.css");?> rel="stylesheet">
    <!--external css-->
    <link href=<?=base_url("assets/frontend2/assets/font-awesome/css/font-awesome.css");?> rel="stylesheet" />
    <link rel="stylesheet" href=<?=base_url("assets/frontend2/css/flexslider.css");?>/>
    <link href=<?=base_url("assets/frontend2/assets/bxslider/jquery.bxslider.css");?> rel="stylesheet" />
    <link href=<?=base_url("assets/frontend2/assets/fancybox/source/jquery.fancybox.css");?> rel="stylesheet" />

    <link rel="stylesheet" href=<?=base_url("assets/frontend2/assets/revolution_slider/css/rs-style.css");?> media="screen">
    <link rel="stylesheet" href=<?=base_url("assets/frontend2/assets/revolution_slider/rs-plugin/css/settings.css");?> media="screen">


    <!-- Date Picker -->
    <link href=<?=base_url("assets/frontend2/assets/bootstrap-datepicker/css/datepicker.css");?> type="text/css" rel="stylesheet">
    <link href=<?=base_url("assets/frontend2/assets/bootstrap-timepicker/compiled/timepicker.css");?> type="text/css" rel="stylesheet">
    
    <link href=<?=base_url("assets/frontend2/assets/bootstrap-fileupload/bootstrap-fileupload.css");?> type="text/css" rel="stylesheet">
    
    

    <!-- Custom styles for this template -->
    <?php if($B=='active'){?>
        <link href=<?=base_url("assets/frontend2/css/style2.css");?> rel="stylesheet">
        <link href=<?=base_url("assets/frontend2/css/style2-responsive.css");?> rel="stylesheet" />
    <?php } else {?>

        <link href=<?=base_url("assets/frontend2/css/style-responsive.css");?> rel="stylesheet" />
        <link href=<?=base_url("assets/frontend2/css/style.css");?> rel="stylesheet">
    <?php }?>
        <link href=<?=base_url("assets/frontend2/css/style.css");?> rel="stylesheet">
        

    <?php 
    if ($B=='active') {
      require "assets/autocomplete/aktalahir.js";   
    }
    ?>

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/custom.css">
    <!-- Jasny bootstrap -->
    <link href="<?php echo base_url(); ?>assets/css/jasny-bootstrap.min.css" rel="stylesheet" media="screen">
    

       

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
    <!--header start-->
    <header class="header-frontend">
        <div class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="fa fa-bars"></span>
                    </button>
                    <a class="navbar-brand" href="#">AplikasiAkta<span> Online</span></a>
                </div>
                <div class="navbar-collapse collapse ">
                    <ul class="nav navbar-nav">
                        <li class=<?php echo $A;?>><a href=<?=base_url("home");?>>Awal</a></li>
                        <li class="dropdown <?php echo $B;?>">
                            <a href="#" class="dropdown-toggle " data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false">Pelayanan Online <b class=" fa fa-angle-down"></b></a>
                            <ul class="dropdown-menu">
                                <li class="<?php echo $B1;?>"><a href=<?=base_url("home/lahir");?>>Akta Kelahiran</a></li>
                                <li class="<?php echo $B2;?>"><a href=<?=base_url("home/mati");?>>Akta Kematian</a></li>
                                <!--<li class="<?php echo $B3;?>"><a href=<?=base_url("home/p_anak");?>>Akta Pengangkatan Anak</a></li>-->
								<li class="<?php echo $B4;?>"><a href=<?=base_url("home/a_kawin");?>>Akta Perkawinan</a></li>
								<li class="<?php echo $B5;?>"><a href=<?=base_url("home/a_cerai");?>>Akta Perceraian</a></li>

                            </ul>
                        </li>
                        <li class="<?php echo $D;?>"><a href=<?=base_url("home/monitoring");?>>Monitoring</a></li>
                        <li class="dropdown <?php echo $E;?>">
                            <a href="#" class="dropdown-toggle " data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false">Infografik <b class=" fa fa-angle-down"></b></a>
                            <ul class="dropdown-menu">
                                <li class="<?php echo $E1;?>"><a href=<?=base_url("home/ig1");?>>Pengajuan Akta</a></li>
                                <li class="<?php echo $E2;?>"><a href=<?=base_url("home/ig2");?>>Persebaran Penduduk</a></li>
                                <li class="<?php echo $E3;?>"><a href=<?=base_url("home/ig3");?>>Presentase Perbandingan Akta</a></li>

                            </ul>
                        </li>
                        <li class="<?php echo $G;?>"><a href=<?=base_url("home/petunjuk");?>>Petunjuk</a></li>
                        <li class="<?php echo $F;?>"><a href=<?=base_url("home/kontak");?>>Kontak</a></li>
						<li><a href=<?=base_url("login");?>>Login</a></li>
						<!--
                        <li><input type="text" placeholder=" Search" class="form-control search"></li>
						-->
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <!--header end-->
    <hr width="100%" align="center">