<html>
  <head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href=<?=base_url("assets/img/fava.png");?> />
    <title>Pelayanan Online Dispendukcapil || Kota Surakarta </title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!--
    <link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.6/themes/base/jquery-ui.css" type="text/css" media="all" />
    <link rel="stylesheet" href="http://static.jquery.com/ui/css/demo-docs-theme/ui.theme.css" type="text/   css" media="all" />
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.3/jquery.min.js" type="text/javascript" script type="text/javascript"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    -->


    <!-- For jQuery 2.1.4  -->
    <script src=<?=base_url("assets/backend/adminlte/plugins/jQuery/jQuery-2.1.4.min.js");?>></script>

    <!-- Font Awesome -->
    <link href=<?=base_url("assets/frontend2/assets/font-awesome/css/font-awesome.css");?> rel="stylesheet" />
    
     <!-- For Timeline -->
    <link href=<?=base_url("assets/timeline/css/style.css");?> rel="stylesheet" type="text/css" />
    
    <link href="<?php echo base_url()?>assets/date_picker_bootstrap/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">

    <!-- Bootstrap 3.3.2 -->
    <link href=<?=base_url("assets/backend/adminlte/bootstrap/css/bootstrap.css");?> rel="stylesheet" type="text/css" />
    
    <!-- Ionicons 2.0.0 -->
    <link href=<?=base_url("assets/backend/adminlte/bootstrap/css/ionicons.min.css");?> rel="stylesheet" type="text/css" />    

    <!-- Font LTE 2.0.0 -->
    <link href=<?=base_url("assets/backend/adminlte/bootstrap/css/font-lte.css");?> rel="stylesheet" type="text/css" />    

    <!-- DATA TABLES -->
    <link href=<?=base_url("assets/backend/adminlte/plugins/datatables/dataTables.bootstrap.css");?> rel="stylesheet" type="text/css" />
    
    <!-- jvectormap -->
    <link href=<?=base_url("assets/backend/adminlte/plugins/jvectormap/jquery-jvectormap-1.2.2.css");?> rel="stylesheet" type="text/css" />
    
    <!-- Daterange picker -->
    <link href=<?=base_url("assets/backend/adminlte/plugins/daterangepicker/daterangepicker-bs3.css");?> rel="stylesheet" type="text/css" />
    
    <!-- Theme style -->
    <link href=<?=base_url("assets/backend/adminlte/dist/css/AdminLTE.css");?> rel="stylesheet" type="text/css" />
    <link href=<?=base_url("assets/backend/adminlte/dist/css/skins/_all-skins.min.css");?> rel="stylesheet" type="text/css" />

    <!-- Add fancyBox main JS and CSS files -->
    <script type="text/javascript" src=<?=base_url("assets/backend/adminlte/plugins/fancybox/source/jquery.fancybox.js?v=2.1.3");?>></script>
    <link rel="stylesheet" type="text/css" href=<?=base_url("assets/backend/adminlte/plugins/fancybox/source/jquery.fancybox.css?v=2.1.2");?> media="screen" />

    <!--CSS STYLE FOR LOADING PAGE-->
<style>
    #loading {
      position: fixed;
      left: 0px;
      top: 0px;
      width: 100%;
      height: 100%;
      z-index: 9999;
      background: url(<?=base_url("assets/img/loading2.gif");?>) 50% 50% no-repeat #fff;
    }
    
  </style>

  <style type='text/css' scoped='scoped'>     
     #BounceToTop{
      position:fixed; bottom:0px; 
      right:3px; 
      cursor:pointer;
      display:none;
      z-index: 9999;
    }     
      </style>  

  <!-- Preloader -->
  <script type="text/javascript">
    $(window).load(function() { $("#loading").fadeOut("slow"); })
  </script>
     <script>
    function tampilkanPreview(gambar,idpreview){
//                membuat objek gambar
        var gb = gambar.files;
        
//                loop untuk merender gambar
        for (var i = 0; i < gb.length; i++){
//                    bikin variabel
            var gbPreview = gb[i];
            var imageType = /image.*/;
            var preview=document.getElementById(idpreview);            
            var reader = new FileReader();
            
            if (gbPreview.type.match(imageType)) {
//                        jika tipe data sesuai
                preview.file = gbPreview;
                reader.onload = (function(element) { 
                    return function(e) { 
                        element.src = e.target.result; 
                    }; 
                })(preview);

//                    membaca data URL gambar
                reader.readAsDataURL(gbPreview);
            }else{
//                        jika tipe data tidak sesuai
                alert("Type file tidak sesuai. Khusus image.");
            }
           
        }    
    }
    </script>

    <link href=<?=base_url("assets/frontend2/assets/bootstrap-fileupload/bootstrap-fileupload.css");?> type="text/css" rel="stylesheet">
    
    <script>
      function karakter(e) {
        if (e.keyCode == 34) { return false}
          else if (e.keyCode == 35){return false}
          else if (e.keyCode == 61){return false}
          else if (e.keyCode == 39){return false}
          else if (e.keyCode == 38){return false}
          else if (e.keyCode == 45){return false}
          else if (e.keyCode == 94){return false}
        else{return true;}
      }
      </script>

    <script type="text/javascript">
        function runScript(e){
        
            if(e.keyCode<48 || e.keyCode>57){
                return false
            }        
        }
    
    </script>

    <script type='text/javascript'>     
        $(function() { 
          $(window).scroll(function() { 
            if($(this).scrollTop()>100) { 
              $('#BounceToTop').fadeIn(); } else { 
                $('#BounceToTop').fadeOut(); } });     
                $('#BounceToTop').click(function() { 
                  $('body,html').animate({scrollTop:0},800) .animate({scrollTop:25},200) .animate({scrollTop:0},150) .animate({scrollTop:10},100) .animate({scrollTop:0},50); }); });     
        </script>
  </head>

  <body class="skin-black sidebar-mini fixed<?php echo $sb;?>">
  <div id="loading"></div>
  
    <div class="wrapper">
    <div id='BounceToTop'>
        <img alt='Back to top' 
        src=<?=base_url("assets/img/top.png")?>>
      </div> 

      <!-- Main Header -->

      <header class="main-header">
        <!-- Logo -->
        <a href=<?=base_url('dashboard');?> class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>A</b>ON</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>Akta</b>ONLINE</span>
        </a>

        <!-- Header Navbar -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- Messages: style can be found in dropdown.less-->


              <!-- User Account Menu -->
              <li class="dropdown user user-menu">
                <!-- Menu Toggle Button -->
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <!-- The user image in the navbar-->
                  <img src=<?=base_url("assets/img/logo-jateng.jpg");?> class="user-image" alt="User Image"/>
                  <!-- hidden-xs hides the username on small devices so only the image appears. -->
                  <span class="hidden-xs"> <?php echo $nama_user; ?></span>
                </a>
                <ul class="dropdown-menu">
                  <!-- The user image in the menu -->
                  <li class="user-header">
                    <img src=<?=base_url("assets/img/logo-jateng.jpg");?> class="img-circle" alt="User Image" />
                    <p>
                      <?php echo $nama_user; ?><br>
                      <small><?php $wil = $this->session->userdata('status'); echo "Login Sebagai : $status"; ?><br>
                      </small>
                    </p>
                  </li>

                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-right">
                      <a href=<?=base_url('login/logout');?> class="btn btn-default btn-flat">Keluar</a>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </nav>
      </header>