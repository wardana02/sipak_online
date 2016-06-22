 <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
    <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-md-12">
                <h2 style="margin-top:0px"><?php echo $head;?></h2>
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
             

                  <div class="row" data-find="_4">
            <div class="col-md-12">
              <!-- Custom Tabs (Pulled to the right) -->
              <div class="nav-tabs-custom" data-find="_11">
                <ul class="nav nav-tabs pull-right">
                  <li class="active"><a href="#tab_1-1" data-toggle="tab"><i class="glyphicon glyphicon-tasks"></i> Riwayat Pengajuan Akta</a></li>
                  <li class="pull-left header"><i class="fa fa-th"></i> Data Pengajuan Akta Online</li>
                </ul>
                <div class="tab-content" data-find="_10">
                  <div class="tab-pane active" id="tab_1-1">
                  <!--TAB PERTAMA-->
                    <table class="table table-bordered table-striped" id="example1">
                        <thead style="background: #3c8dbc">
                            <tr style="color: #ffffff">
                              <th width="50px">No</th>
                              <th>No Pendaftaran</th>
                              <th>Tgl Pendaftaran</th>
                              <th><?php echo $nama2;?></th>
                              <th><?php echo $nama;?></th>
                              <th>Tanggal Pengambilan</th>
                              <th>Action</th>
                          </tr>
                        </thead>
        <tbody>
            <?php
            $start = 0;
            foreach ($approval_data as $approval)
            {
                ?>
                <tr>
            <td><?php echo ++$start ?></td>
            <td><?php echo $approval->no_registrasi ?></td>
            <td><?php echo dateindo($approval->tgl_registrasi) ?></td>
            <td><?php echo $approval->ibu ?></td>
            <td><?php echo $approval->nm ?></td>
            <td><?php echo dateindo($approval->tgl_ambil) ?></td>
            <td style="text-align:left" width="100px">
                        <div class="btn-group"> 
                                <button type="button" class="btn btn.bg-navy dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                  <span class="caret"></span>
                                  <span class="sr-only">Toggle Dropdown</span>Aksi
                                </button>

                                <ul class="dropdown-menu" role="menu">
                                  <li><a href="#" class="read" data-id="<?php echo $approval->id_approval; ?>"> Lihat Status</a></li>
                                  <li><a href="#" class="read2" data-id="<?php echo "$approval->no_regis,$approval->nik_pengaju,$approval->nama_p,$approval->no_hp" ?>"> Detail Pendaftaran</a></li>
                                  <li class="divider"></li>
                                  <?php if($status=="DUKCAPIL"){?>
                                  <?php } if($status=="KELURAHAN"){?>
                                  <?php }elseif($status=="DUKCAPIL"){?>
                                  <li class="divider"></li>
                                  <?php }?>
                                
                                </ul>
                              </div> 
                        </td>
            </tr>
                <?php
            }
            ?>
            </tbody>
        </table>

                  </div><!-- /.tab-pane -->
                  <!-- /.tab-pane -->
                </div><!-- /.tab-content -->
              </div><!-- nav-tabs-custom -->
            </div><!-- /.col -->
          </div>
        

                <!--FRO GENERATE -->

                  </div><!-- /.mail-box-messages -->
                </div><!-- /.box-body -->
              </div><!-- /. box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->