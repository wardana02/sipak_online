  <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Import Data Penduduk
            <small> Kota Surakarta</small>
          </h1>
      
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="box">

          <?php echo   $this->session->userdata('pesan');?>


                      <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Baca Dahulu !!</h3>
                </div><!-- /.box-header -->

                <div class="box">
                <div class="box-header">
                  <p> Data Penduduk Yang Akan Anda Import pastikan bertipe file *.xls atau *.xlsx</p>
                  <p> Data akan berubah berdasarkan data baru yang ada didalam file excel tersebut.</p>
                  <p> !!. Format Export Disediakan Dalam Bentuk File Excel (*.xls) Minimum dibuka dengan Microsoft Excel 2007</p>
                </div><!-- /.box-header -->


                <div class="box-body">

              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Upload Data Penduduk (From <a href="#">Excel</a>)</h3>
                </div>
                <div class="box-body">
                
                  
                  
                  
                </div>
                <form action="<?php echo base_url();?>excel/upload/" method="post" enctype="multipart/form-data">
                        
                        <input type="file" name="file"/>
                        <input class="btn btn-success" type="submit" value="Unggah File Excel !!"/>
                    </form>
              </div>

                  <br><br>
                  <i class="pull-left">Notice : Sesuaikan dengan format yang tersedia</i>
                <i class="pull-right">Tanggal <?php echo dateindo(date('Y-m-d'));?></i> 
                <br>
                <br> 
                </div><!-- /.box-body -->
              </div><!-- /.box -->
      </div>




        </section><!-- /.content -->
</div><!-- /.content-wrapper -->
