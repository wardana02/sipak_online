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
            <div class="col-md-12">
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Pesan Masuk</h3>
                </div><!-- /.box-header -->
                <div class="col-md-12 text-center">
                <div style="margin-top: 4px"  id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div><br>
                <div class="box-body">
                  <a href="<?= base_url($re); ?>" class="btn btn-primary"><i class="glyphicon glyphicon-transfer"></i>  Muat Ulang Data/Refresh</a> 
                  
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
                      $pre = substr($kode->TextDecoded,0,80);
                      
                      $i++;
                          echo "
                          <tr>
                            <td class='mailbox-name'><a href='read-mail.html'>$kode->SenderNumber</a></td>
                            <td class='mailbox-subject'><b>$N -</b>  $pre ........</td>
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
                                 <li><a href="#" class="read" data-id="<?php echo $kode->aid; ?>"> Baca Pesan</a></li>
                                 <li><a href="#" class="create" data-id="<?php echo $kode->SenderNumber; ?>"> Balas</a></li>
                                  <li><a id="simpleConfirm" href=<?php echo site_url('mail/delete_inbox/'.$kode->aid); ?>>Hapus</a></li>
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
                                     