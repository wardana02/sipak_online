 <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
    <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-md-12">
                <h2 style="margin-top:0px">Parameter Acuan Akta</h2>
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
                    <?php echo anchor(site_url('parameter/create'), 'Tambah Parameter', 'class="btn btn-success"'); ?>
                  </h3>
                </div><!-- /.box-header -->

                <div class="box-body">
                  <div class="">
                  
                  <!--FRO GENERATE -->

                  <table class="table table-bordered table-striped" id="example1">
            <thead>
                <tr>
                    <th width="80px">No</th>
            <th>Jenis</th>
            <th>Denda</th>
            <th>Durasi</th>
            <th>Action</th>
                </tr>
            </thead>
        <tbody>
            <?php
            $start = 0;
            foreach ($parameter_data as $parameter)
            {
                ?>
                <tr>
            <td><?php echo ++$start ?></td>
            <td><?php echo $parameter->jenis ?></td>
            <td><?php echo $parameter->denda ?></td>
            <td><?php echo $parameter->durasi ?></td>
            <td style="text-align:center" width="200px">
            <?php 
            echo anchor(site_url('parameter/update/'.$parameter->id_parameter),'Update','onclick="javasciprt: return confirm(\'Anda Yakin Ubah Data ?\')"'); 
            ?>
            </td>
            </tr>
                <?php
            }
            ?>
            </tbody>
        </table>


                    <!--FRO GENERATE -->

                  </div><!-- /.mail-box-messages -->
                </div><!-- /.box-body -->
              </div><!-- /. box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->