        <div class="modal fade in" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                <h4 class="modal-title" id="myModalLabel"><?php echo $modal_title;?></h4>
                            </div>
                            <div class="modal-body">
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary" data-dismiss="modal">Kembali</button>
                               
                            </div>
                        </div>
                    </div>
                </div>


   <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> Beta
        </div>
        <strong>Copyright &copy; 2016 <a href="http://#">Tugas Akhir D3 Teknik Informatika</a>.</strong> All rights reserved by aaji.
      </footer>


     </div><!-- ./wrapper -->



        
                                 

 <!-- REQUIRED JS SCRIPTS 
 -->

    <!-- Bootstrap 3.3.2 JS-->
    <script src=<?=base_url("assets/js/bootstrap.js");?>></script> 

    <!-- Modal Read Data -->
    <script>
        $(function(){
            $(document).on('click','.read',function(e){
                e.preventDefault();
                $("#myModal").appendTo("body").modal('show');
                $.post('<?php echo $modal_read ;?>',
                    {id:$(this).attr('data-id')},
                    function(html){
                        $(".modal-body").html(html);
                    }   
                );
            });
        });
    </script>

    <!-- Modal reate Data -->
    <script>
        $(function(){
            $(document).on('click','.create',function(e){
                e.preventDefault();
                $("#myModal").appendTo("body").modal('show');
                $.post('<?php echo $modal_create ;?>',
                    {id:$(this).attr('data-id')},
                    function(html){
                        $(".modal-body").html(html);
                    }   
                );
            });
        });
    </script>

    <!-- Modal Pengambilan Akta Data -->
    <script>
        $(function(){
            $(document).on('click','.pengambilan',function(e){
                e.preventDefault();
                $("#myModal").appendTo("body").modal('show');
                $.post('<?php echo $modal_pengambilan ;?>',
                    {id:$(this).attr('data-id')},
                    function(html){
                        $(".modal-body").html(html);
                    }   
                );
            });
        });
    </script>
   
      <!-- AdminLTE App -->
    <script src=<?=base_url("assets/backend/adminlte/dist/js/app.min.js");?> type="text/javascript"></script>
   <!-- Slimscroll -->
    <script src=<?=base_url("assets/backend/adminlte/plugins/slimScroll/jquery.slimscroll.min.js");?> type="text/javascript"></script>
    

    <script src=<?=base_url("assets/timeline/js/main.js");?> type="text/javascript"></script>
    <script src=<?=base_url("assets/timeline/js/modernizr.js");?> type="text/javascript"></script>

    <!-- SlimScroll -->
    <script src=<?=base_url("assets/backend/adminlte/plugins/slimScroll/jquery.slimScroll.min.js");?> type="text/javascript"></script>
    

    <!--file include Bootstrap js dan datepickerbootstrap.js-->
    <script type="text/javascript" src="<?php echo base_url()?>assets/date_picker_bootstrap/js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
    <script type="text/javascript" src="<?php echo base_url()?>assets/date_picker_bootstrap/js/locales/bootstrap-datetimepicker.id.js"charset="UTF-8"></script>

    <!-- Fungsi datepickier yang digunakan -->
    <script type="text/javascript">
     $('.datepicker').datetimepicker({
            language:  'id',
            weekStart: 1,
            todayBtn:  1,
      autoclose: 1,
      todayHighlight: 1,
      startView: 2,
      minView: 2,
      forceParse: 0
        });
    </script>

    <!-- Add fancyBox main JS and CSS files -->
    <script type="text/javascript" src=<?=base_url("assets/frontend2/assets/fancybox/source/jquery.fancybox.js?v=2.1.3");?>></script>
    <link rel="stylesheet" type="text/css" href=<?=base_url("assets/frontend2/assets/fancybox/source/jquery.fancybox.css?v=2.1.2");?> media="screen" />
    <script type="text/javascript">
        $(document).ready(function() {
            $('.fancybox').fancybox();
        });
    </script> 


    <?php if($chart=='active'){ ?>
    <!-- Highchart -->
    <script src=<?=base_url("assets/highchart/js/highcharts.js");?>></script>
    <script src=<?=base_url("assets/highchart/js/highcharts-3d.js");?>></script>
    <script src=<?=base_url("assets/highchart/js/modules/data.js");?>></script>
    <script src=<?=base_url("assets/highchart/js/modules/exporting.js");?>></script>

    <script type="text/javascript">
        $(function () {
            $('#g5').highcharts({

                chart: {
                    type: 'column'
                },

                title: {
                    text: ''
                },

                xAxis: {
                    categories: ['Laki-Laki', 'Perempuan']
                },

                yAxis: {
                    allowDecimals: false,
                    min: 0,
                    title: {
                        text: 'Jumlah'
                    }
                },

                tooltip: {
                    formatter: function () {
                        return '<b>' + this.x + '</b><br/>' +
                            this.series.name + ': ' + this.y + '<br/>' +
                            'Total: ' + this.point.stackTotal;
                    }
                },

                plotOptions: {
                    column: {
                        stacking: 'normal'
                    }
                },

                series: [{
                    name: 'Jumlah',
                    data: [<?php echo $laki.",".$wan;?>]
                }]
            });
        });
        </script>


      <script type="text/javascript">
$(function () {
    $('#container').highcharts({
        chart: {
            type: 'pie',
            options3d: {
                enabled: true,
                alpha: 45,
                beta: 0
            }
        },
        title: {
            text: ''
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                depth: 35,
                dataLabels: {
                    enabled: true,
                    format: '{point.name}'
                }
            }
        },
        series: [{
            type: 'pie',
            name: 'Pengajuan Akta',
            data: [
                ['Akta Kelahiran',   <?php echo $al;?>],
                ['Akta Kematian',       <?php echo $am;?>],
                {
                    name: 'Akta Perkawinan',
                    y: <?php echo $ap;?>,
                    sliced: true,
                    selected: true
                },
                ['Akta Perceraian',<?php echo $ac;?>]
            ]
        }]
    });
});
    </script>

    <script type="text/javascript">
$(function () {
    $('#g3').highcharts({
        title: {
            text: "<?php echo $head_g3 ?>"
        },
        xAxis: {
            categories: [<?php echo "'".$kat[0]."','".$kat[1]."','".$kat[2]."'";?>]
        },
        
        series: [{
            type: 'column',
            name: 'Total Data',
            data: [<?php echo $total['jml'].",".$total['laki'].",".$total['wanita'];?>]
        }
        <?php if($status!='ADMIN') { ?>
        , {
            type: 'column',
            name: 'Per Kelurahan',
            data: [<?php echo $kel['jml'].",".$kel['laki'].",".$kel['wanita'];?>]
        }
        <?php } ?>
        ]
    });
});


    </script>
    <?php } ?>

    <!-- date-range-picker -->
    <script src=<?=base_url("assets/backend/adminlte/plugins/daterangepicker/daterangepicker.js");?> type="text/javascript"></script>
     
     <!-- InputMask -->
     <script src=<?=base_url("assets/backend/adminlte/plugins/input-mask/jquery.inputmask.js");?> type="text/javascript"></script>
     <script src=<?=base_url("assets/backend/adminlte/plugins/input-mask/jquery.inputmask.date.extensions.js");?> type="text/javascript"></script>
     <script src=<?=base_url("assets/backend/adminlte/plugins/input-mask/jquery.inputmask.extensions.js");?> type="text/javascript"></script>
   
    <!-- DATA TABES SCRIPT -->
          
    <script src="<?php echo base_url() ?>assets/backend/adminlte/plugins/datatables/jquery.dataTables.js" type="text/javascript"></script>
    <script src="<?php echo base_url() ?>assets/backend/adminlte/plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script>
    <script type="text/javascript">
      $(document).ready(function() {
            $('#example1').DataTable( {
                "scrollX": '100%'
            } );
        } );
    </script>

       <script type="text/javascript">
      $(function () {
        //Datemask dd/mm/yyyy
        $("#datemask").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});
        //Datemask2 mm/dd/yyyy
        $("#datemask2").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});
        //Money Euro
        $("[data-mask]").inputmask();

        //Date range picker
        $('#reservation').daterangepicker();
        //Date range picker with time picker
        $('#reservationtime').daterangepicker({timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A'});
        //Date range as a button
        $('#daterange-btn').daterangepicker(
                {
                  ranges: {
                    'Today': [moment(), moment()],
                    'Yesterday': [moment().subtract('days', 1), moment().subtract('days', 1)],
                    'Last 7 Days': [moment().subtract('days', 6), moment()],
                    'Last 30 Days': [moment().subtract('days', 29), moment()],
                    'This Month': [moment().startOf('month'), moment().endOf('month')],
                    'Last Month': [moment().subtract('month', 1).startOf('month'), moment().subtract('month', 1).endOf('month')]
                  },
                  startDate: moment().subtract('days', 29),
                  endDate: moment()
                },
        function (start, end) {
          $('#reportrange span').html(start.format('DDDD M, YYYY') + '-' + end.format('DDDD M, YYYY'));
        }
        );

      
        //Timepicker
        $(".timepicker").timepicker({
          showInputs: false
        });
      });
    </script>
  </body>
</html>



