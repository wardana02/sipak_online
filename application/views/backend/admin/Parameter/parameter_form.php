 <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
    <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-md-12">
                <h2 style="margin-top:0px">Tambah Data Parameter</h2>
            </div>
            <div class="col-md-12 text-center">
                <div style="margin-top: 4px"  id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div><br>
            <div class="col-md-12">
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title"> 
                    </h3>
                </div><!-- /.box-header -->

                <div class="box-body">
                  <div class="">
                  
                  <!--FRO GENERATE -->
                   <form action="<?php echo $action; ?>" method="post">
                            <div class="form-group">
                                <label for="varchar">Jenis <?php echo form_error('jenis') ?></label>
                                <input type="text" class="form-control" name="jenis" id="jenis" placeholder="Jenis" value="<?php echo $jenis; ?>" />
                            </div>
                            <div class="form-group">
                                <label for="int">Denda <?php echo form_error('denda') ?></label>
                                <input type="text" class="form-control" name="denda" id="denda" placeholder="Denda" value="<?php echo $denda; ?>" />
                            </div>
                            <div class="form-group">
                                <label for="int">Durasi <?php echo form_error('durasi') ?></label>
                                <input type="text" class="form-control" name="durasi" id="durasi" placeholder="Durasi" value="<?php echo $durasi; ?>" />
                            </div>
                            <input type="hidden" name="id_parameter" value="<?php echo $id_parameter; ?>" /> 
                            <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
                            <a href="<?php echo site_url('parameter2') ?>" class="btn btn-default">Cancel</a>
                        </form>
                    <!--FRO GENERATE -->

                  </div><!-- /.mail-box-messages -->
                </div><!-- /.box-body -->
              </div><!-- /. box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->