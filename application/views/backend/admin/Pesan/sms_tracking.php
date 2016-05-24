      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Kotak Masuk SMS Pelayanan Online
            <small></small>
          </h1>
          
        </section>

<!-- Main content -->
        <section class="content">
          <div class="row">
            

            <div class="col-md-10">
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Pesan Masuk</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <div class="mailbox-controls">
                    <!-- Check all button -->
                    
                   
                  </div>
                  <div class="">
                    <table id="example1" class="table table-hover table-striped">

                    <thead>
                    <tr>
                      <th class="sorting">Nomor</th>
                      <th class="sorting">Isi Pesan</th>
                      <th class="sorting">Tanggal</th>
                      <th class="sorting">Opsi</th>
                    </tr>

                  </thead>

                    <tbody>
                    <?php 
                    $i = 0;
                    foreach ($data as $kode) {
                      if($kode->Name==''){$N="NN";}
                      else $N=$kode->Name;
                      
                      $i++;
                          echo "
                          <tr>
                            <td class='mailbox-name'><a href='read-mail.html'>$kode->SenderNumber</a></td>
                            <td class='mailbox-subject'><b>$N -</b>  $kode->TextDecoded</td>
                            <td class='mailbox-data'>$kode->ReceivingDateTime</td>    
                          ";
                      ?>
                          <td>
                              <div class="btn-group"> 
                                <button type="button" class="btn btn.bg-navy dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                  <span class="caret"></span>
                                  <span class="sr-only">Toggle Dropdown</span>Aksi
                                </button>

                                <ul class="dropdown-menu" role="menu">
                                  <li><a href=<?php echo site_url('informasi/edit/'.$data->id); ?>> Balas</a></li>
                                  <li><a id="simpleConfirm" href=<?php echo site_url('informasi/delete/'.$data->id); ?>>Hapus</a></li>
                                </ul>
                              </div>     
                            </td>

                      </tr>
                      <?php } ?>
                  </tbody>

            

                      
                    </table><!-- /.table -->
                  </div><!-- /.mail-box-messages -->
                </div><!-- /.box-body -->
                <div class="box-footer no-padding">
                  
                </div>
              </div><!-- /. box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
                                     