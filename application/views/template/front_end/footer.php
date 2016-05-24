 <!--footer start-->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-3">
                    <h1>informasi dinas</h1>
                    <address>
                        <p>Alamat: Jl. Jend. Sudirman No.2, Kp. Baru, Ps. Kliwon</p>
                        <p>Kota Surakarta, Jawa Tengah, Indonesia</p>

                        <p>Phone : +62 271 639554</p>
                        <p>Website : <a href="javascript:;">dispendukcapil.surakarta.go.id</a></p>
                    </address>
                </div>
                <div class="col-lg-5 col-sm-5">
                    <h1>latest tweet</h1>
                    <div class="tweet-box">
                        <i class="fa fa-twitter"></i>
                        <em>
                        <?php
                          foreach($tweets as $tweet)
                            {
                              echo "$tweet->text <br>";
                            } 
                        ?>
                          
                        </em>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-3 col-lg-offset-1">
                    <h1>tetap terhubung dengan kami</h1>
                    <ul class="social-link-footer list-unstyled">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!--footer end-->

    <!-- js placed at the end of the document so the pages load faster
    <script src=<?=base_url("assets/frontend2/js/jquery.js");?>></script> -->
    
    <script src=<?=base_url("assets/frontend2/js/jquery-1.8.3.min.js");?>></script>
    <script src=<?=base_url("assets/frontend2/js/bootstrap.min.js");?>></script>
    <script type="text/javascript" src=<?=base_url("assets/frontend2/js/hover-dropdown.js");?>></script>
    <script defer src=<?=base_url("assets/frontend2/js/jquery.flexslider.js");?>></script>
    <script type="text/javascript" src=<?=base_url("assets/frontend2/assets/bxslider/jquery.bxslider.js");?>></script>
    <script type="text/javascript" src=<?=base_url("assets/frontend2/js/jquery.parallax-1.1.3.js");?>></script>

    <script class="include" type="text/javascript" src=<?=base_url("assets/frontend2/js/jquery.dcjqaccordion.2.7.js");?>></script>

    <script src=<?=base_url("assets/frontend2/js/jquery.easing.min.js");?>></script>
    <script src=<?=base_url("assets/frontend2/js/link-hover.js");?>></script>

    <script src=<?=base_url("assets/frontend2/assets/fancybox/source/jquery.fancybox.pack.js");?>></script>

    <script type="text/javascript" src=<?=base_url("assets/frontend2/assets/revolution_slider/rs-plugin/js/jquery.themepunch.plugins.min.js");?>></script>
    <script type="text/javascript" src=<?=base_url("assets/frontend2/assets/revolution_slider/rs-plugin/js/jquery.themepunch.revolution.min.js");?>></script>
    
    <!--Date Picker Js-->
    <script src=<?=base_url("assets/frontend2/assets/bootstrap-datepicker/js/bootstrap-datepicker.js");?>></script>
    <script src=<?=base_url("assets/frontend2/assets/bootstrap-timepicker/js/bootstrap-timepicker.js");?>></script>
    <script src=<?=base_url("assets/frontend2/assets/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js");?>></script>

    <script src=<?=base_url("assets/frontend2/assets/bootstrap-fileupload/bootstrap-fileupload.js");?>></script>

    


    <!--common script for all pages-->
    <script src=<?=base_url("assets/frontend2/js/common-scripts.js");?>></script>
      <!--this page  script only-->
      <script src=<?=base_url("assets/frontend2/js/advanced-form-components.js");?>></script>
      <script src=<?=base_url("assets/frontend2/js/revulation-slide.js");?>></script>   
      <script src=<?=base_url("assets/frontend2/js/jquery.stepy.js");?>></script>



    <script src="<?php echo base_url(); ?>assets/js/jasny-bootstrap.min.js"></script>    
    <script src="<?php echo base_url(); ?>assets/js/custom.js"></script>    

     <script type="text/javascript">
      $(function() { 
          $('#backtotop').click(function() {
              $('body,html').animate({scrollTop:0},800);
          });    
      });
      </script>
    

    <script>

      //step wizard

      $(function() {
          $('#default').stepy({
              backLabel: 'Kembali',
              block: true,
              nextLabel: 'Selanjutnya',
              titleClick: true,
              titleTarget: '.stepy-tab'
          });
      });

      $(function() {
          $('#form-upload').stepy({
              backLabel: 'Kembali',
              block: true,
              nextLabel: 'Selanjutnya',
              titleClick: true,
              titleTarget: '.stepy-tab'
          });
      });
  </script>

    
  <script>

      RevSlide.initRevolutionSlider();

      $(window).load(function() {
          $('[data-zlname = reverse-effect]').mateHover({
              position: 'y-reverse',
              overlayStyle: 'rolling',
              overlayBg: '#fff',
              overlayOpacity: 0.7,
              overlayEasing: 'easeOutCirc',
              rollingPosition: 'top',
              popupEasing: 'easeOutBack',
              popup2Easing: 'easeOutBack'
          });
      });

      $(window).load(function() {
          $('.flexslider').flexslider({
              animation: "slide",
              start: function(slider) {
                  $('body').removeClass('loading');
              }
          });
      });

      //    fancybox
      jQuery(".fancybox").fancybox();
  </script>


      <?php if ($E=='active') { ?>
      <script src=<?=base_url("assets/highchart/js/highcharts.js");?>></script>
      <script src=<?=base_url("assets/highchart/js/modules/data.js");?>></script>
      <script src=<?=base_url("assets/highchart/js/modules/exporting.js");?>></script>
      <script type="text/javascript">
      $(function () {

          $(document).ready(function () {
            Highcharts.setOptions({
              colors: [  
                    '#24CBE5', '#64E572', '#FF9655', '#FFF263', '#6AF9C4']
          });

              // Build the chart
              $('#g1').highcharts({
                  chart: {
                      plotBackgroundColor: null,
                      plotBorderWidth: null,
                      plotShadow: false,
                      type: 'pie'
                  },
                  credits: {
                    text: 'Aplikasi Akta Online Dukcapil Surakarta',
                    href: '#'
                  },
                  title: {
                      text: '<?php echo $judul;?>'
                  },
                  tooltip: {
                      pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
                  },
                  plotOptions: {
                      pie: {
                          allowPointSelect: true,
                          cursor: 'pointer',
                          dataLabels: {
                              enabled: false
                          },
                          showInLegend: true
                      }
                  },

                  series: [{
                      name: "Jumlah Dalam Persen",
                      colorByPoint: true,
                      data: [{
                          name: "Akta Kelahiran",
                          y: <?php echo $al;?>
                      }, {
                          name: "Akta Kematian",
                          y: <?php echo $am;?>,
                          sliced: true,
                          selected: true
                      }, {
                          name: "Akta Perkawinan",
                          y: <?php echo $ap;?>
                      }, {
                          name: "Akta Perceraian",
                          y: <?php echo $ac;?>
                      }]
                  }]
              });
          });
      });
          </script>

          <script type="text/javascript">
$(function () {
  

    $('#g2').highcharts({
        chart: {
            type: 'line'
        },
        credits: {
                    text: 'Aplikasi Akta Online Dukcapil Surakarta',
                    href: '#'
                  },
        title: {
            text: 'Persebaran Bulan Lahir Penduduk Surakarta'
        },
        subtitle: {
            text: 'Sumber: Data Penduduk Aplikasi Akta Online'
        },
        xAxis: {
            categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
        },
        yAxis: {
            title: {
                text: 'Jumlah Penduduk'
            }
        },
        plotOptions: {
            line: {
                dataLabels: {
                    enabled: true
                },
                enableMouseTracking: true
            }
        },
        series: [{
            name: 'Laki-Laki',
            data: [<?php foreach ($lk as $key => $value) {
              echo $value.", ";
            }?>]
        }, {
            name: 'Perempuan',
            data: [<?php foreach ($wa as $key => $value) {
              echo $value.", ";
            }?>]
        }]
    });
});
    </script>

    <script type="text/javascript">
        $(function () {
            $('#g3').highcharts({
                title: {
                    text: '<?php echo $judul;?>'
                },
                xAxis: {
                    categories: ['Kec.Banjarsari', 'Kec.Jebres', 'Kec.Laweyan', 'Kec.Ps Kliwon', 'Kec.Serengan']
                },
                credits: {
                    text: 'Aplikasi Akta Online Dukcapil Surakarta',
                    href: '#'
                  },
                series: [{
                    type: 'column',
                    name: 'Akta Kelahiran',
                    data: [<?php foreach ($al_kec as $key => $value) {
                            echo $value.", ";
                          }?>]
                }, {
                    type: 'column',
                    name: 'Akta Kematian',
                    data: [<?php foreach ($am_kec as $key => $value) {
                            echo $value.", ";
                          }?>]
                }, {
                    type: 'column',
                    name: 'Akta Perkawinan',
                    data: [<?php foreach ($ap_kec as $key => $value) {
                            echo $value.", ";
                          }?>]
                }, {
                    type: 'column',
                    name: 'Akta Perceraian',
                    data: [<?php foreach ($ac_kec as $key => $value) {
                            echo $value.", ";
                          }?>]
                }]
            });
        });
    </script>


          <?php } ?>

  </body>
</html>
