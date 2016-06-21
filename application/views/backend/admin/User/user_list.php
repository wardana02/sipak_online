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
                  <div class="box-title"><font color="#ffffff"><i class="glyphicon glyphicon-user"></i>  Data User Sistem Capil Online</font></div>
                </div><!-- /.box-header -->

                <div class="box-body">
                  <div class="">
                  <h3 class="box-title">
                    <a href=<?=site_url('user/create')?> class="btn btn-success">
                      <i class="glyphicon glyphicon-plus"></i> Tambah User Baru 
                    </a>
                  </h3>
                  
                  <!--FRO GENERATE -->
                    <table class="table table-bordered table-striped" id="example1">
                        <thead style="background: #3c8dbc">
                            <tr style="color: #ffffff">
                                <th width="30px">No</th>
            		    <th>Previlage</th>
                    <th>Nama User</th>
            		    <th>Username</th>
            		    <th>Jabatan</th>
            		    <th>Last Log</th>
            		    <th>Aktif</th>
            		    <th>Action</th>
                            </tr>
                        </thead>
            	    <tbody>
                        <?php
                        $start = 0;
                        foreach ($user_data as $user)
                        {
                            ?>
                            <tr>
            		    <td><?php echo ++$start ?></td>
            		    <td><?php echo $user->previlage ?></td>
                    <td><?php echo $user->nama_user ?></td>
            		    <td><?php echo $user->username ?></td>
            		    <td><?php echo $user->jabatan ?></td>
            		    <td><?php echo $user->last_log ?></td>
            		    <td style="text-align:center"><?php 
                      if($user->aktif == '0'){echo "<span class='label label-warning'><i class='glyphicon glyphicon-cog'></i></span>";}
                      else {echo "<span class='label label-success'><i class='glyphicon glyphicon-thumbs-up'></i></span>";} ?>
                    </td>
            		    <td style="text-align:center" width="150px">
                        <div class="btn-group"> 
                                <button type="button" class="btn btn.bg-navy dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                  <span class="caret"></span>
                                  <span class="sr-only">Toggle Dropdown</span>Aksi
                                </button>

                                <ul class="dropdown-menu" role="menu">
                                  <li><a href="#" class="read" data-id="<?php echo $user->id_user; ?>"> Lihat</a></li>
                                  <li><a href=<?php echo site_url('user/update/'.$user->id_user); ?> >Ubah</a></li>
                                  <li><a href=<?php echo site_url('user/delete/'.$user->id_user); ?> onclick="javasciprt: return confirm('Anda Yakin Menghapus Data Alumni Ini ?')">Hapus</a></li>
                                  <li>
                                  <?php
                                    if($user->aktif == '0'){echo "<a href=".site_url('user/ubah/1/'.$user->id_user)." onclick=\"javasciprt: return confirm('Anda Yakin Mengaktifkan Data User Ini ?')\">Aktifkan User</a>";}
                                    else {echo "<a href=".site_url('user/ubah/0/'.$user->id_user)." onclick=\"javasciprt: return confirm('Anda Nonaktifkan Data User Ini ?')\">NonAktifkan User</a>";}
                                  ?>
                                  </li>
                                
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