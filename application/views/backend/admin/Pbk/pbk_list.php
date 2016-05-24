 <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
    <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-md-12">
                <h2 style="margin-top:0px">Data Kontak Tersimpan</h2>
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
                  <a href="#" class="create btn btn-success"> Tambah Kontak Baru</a> 
                    
                  </h3>
                </div><!-- /.box-header -->

                <div class="box-body">
                  <div class="">
                  
                  <!--FRO GENERATE -->
                   <table class="table table-bordered table-striped" id="example1">
            <thead>
                <tr>
                    <th width="80px">No</th>
        <th>Name</th>
        <th>Number</th>
        <th>Action</th>
                </tr>
            </thead>
      <tbody>
            <?php
            $start = 0;
            foreach ($pbk_data as $pbk)
            {
                ?>
                <tr>
        <td><?php echo ++$start ?></td>
        <td><?php echo $pbk->Name ?></td>
        <td><?php echo $pbk->Number ?></td>
        <td style="text-align:center" width="150px">
                        <div class="btn-group"> 
                                <button type="button" class="btn btn.bg-navy dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                  <span class="caret"></span>
                                  <span class="sr-only">Toggle Dropdown</span>Aksi
                                </button>

                                <ul class="dropdown-menu" role="menu">
                                  <li><a href=<?php echo site_url('pbk/update/'.$pbk->ID); ?>>Ubah</a></li>
                                  <li><a href=<?php echo site_url('pbk/delete/'.$pbk->ID); ?> onclick="javasciprt: return confirm('Anda Yakin Menghapus Data Alumni Ini ?')">Hapus</a></li>
                                </ul>
                              </div> 
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