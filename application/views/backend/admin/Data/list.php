 <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
    <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-md-12">
            </div>
            <div class="col-md-12 text-center">
                <div style="margin-top: 4px"  id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div><br>



            <div class="col-md-12">
              <div class="box box-primary">
              <div class="box-header with-border" style="background: #3c8dbc">
                  <div class="box-title"><font color="#ffffff"><i class="glyphicon glyphicon-user"></i>  Data Penduduk Kota Surakarta</font></div>
                </div><!-- /.box-header -->

                <div class="box-body">
                  <div class="">
                  
                  <!--FRO GENERATE -->
                   <div class="row" style="margin-bottom: 10px">
            <div class="col-md-4">
            </div>
            <div class="col-md-4 text-center">
                <div style="margin-top: 4px"  id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div>
            <div class="col-md-4 text-right">
		<?php echo anchor(site_url('data/export_excel'), 'Excel', 'class="btn btn-primary"'); ?>
	    </div>
        </div>
        <table class="table table-bordered table-striped" id="example">
                        <thead style="background: #3c8dbc">
                            <tr style="color: #ffffff">
                    <th width="80px">No</th>
		    <th>NIK</th>
		    <th>Nama Lengkap</th>
		    <th>Tmp Lahir</th>
		    <th>Tgl Lahir</th>
		    <th>Jk</th>
		    <th>Gol Darah</th>
		    <th>Agama</th>
		    <th>Status Perkawinan</th>
		    <th>Ps Alamat</th>
		    <th>Ps Rt</th>
		    <th>Ps Rw</th>
		    <th>Ps Kelurahan</th>
		    <th>Ps Kecamatan</th>
		    <th>Pekerjaan</th>
                </tr>
            </thead>
	    <tbody>
            <?php
            $start = 0;
            foreach ($dpse_data as $dpse)
            {
                ?>
                <tr>
		    <td><?php echo ++$start ?></td>
		    <td><?php echo $dpse->NIK ?></td>
		    <td><?php echo $dpse->nama_lengkap ?></td>
		    <td><?php echo $dpse->tmp_lahir ?></td>
		    <td><?php echo $dpse->tgl_lahir ?></td>
		    <td><?php echo $dpse->jk ?></td>
		    <td><?php echo $dpse->gol_darah ?></td>
		    <td><?php echo $dpse->agama ?></td>
		    <td><?php echo $dpse->status_perkawinan ?></td>
		    <td><?php echo $dpse->ps_alamat ?></td>
		    <td><?php echo $dpse->ps_rt ?></td>
		    <td><?php echo $dpse->ps_rw ?></td>
		    <td><?php echo $dpse->ps_kelurahan ?></td>
		    <td><?php echo $dpse->ps_kecamatan ?></td>
		    <td><?php echo $dpse->pekerjaan ?></td>
		    
	        </tr>
                <?php
            }
            ?>
            </tbody>
            <tfoot style="background: #3c8dbc">
                            <tr style="color: #ffffff">
                    <th>No</th>
        <th>NIK</th>
        <th>Nama Lengkap</th>
        <th>Tmp Lahir</th>
        <th>Tgl Lahir</th>
        <th>Jk</th>
        <th>Gol Darah</th>
        <th>Agama</th>
        <th>Status Perkawinan</th>
        <th>Ps Alamat</th>
        <th>Ps Rt</th>
        <th>Ps Rw</th>
        <th>Ps Kelurahan</th>
        <th>Ps Kecamatan</th>
        <th>Pekerjaan</th>
                </tr>
            </tfoot>
        </table>
                    <!--FRO GENERATE -->

                  </div><!-- /.mail-box-messages -->
                </div><!-- /.box-body -->
              </div><!-- /. box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

