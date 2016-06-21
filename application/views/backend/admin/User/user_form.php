 <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
    <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-md-12">
                <h2 style="margin-top:0px">Data User Sistem Capil Online</h2>
            </div>

            
            <div class="col-md-12">
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title"> 
                    <?php echo $title; ?>
                     </h3>
                </div><!-- /.box-header -->

                <div class="box-body">
                  <div class="">
                  
                  <!--FRO GENERATE -->
                    <form class="form-horizontal" action="<?php echo $action; ?>" id="myform" method="post">
                            <div class="form-group">
                                  <label for="varchar" class="col-lg-2 control-label">Previlage <?php echo form_error('previlage') ?></label>
                                  <div class="col-lg-10">
                                     <select name="previlage" class="form-control">
                                       <option value="ADMIN" <?php if($previlage=='ADMIN') echo "selected"; ?>> ADMIN</option>
                                       <option value="DUKCAPIL" <?php if($previlage=='DUKCAPIL') echo "selected"; ?>> DUKCAPIL</option>
                                       <option value="KELURAHAN" <?php if($previlage=='KELURAHAN') echo "selected"; ?>> KELURAHAN</option>
                                       <option value="RW" <?php if($previlage=='RW') echo "selected"; ?>> KETUA RW</option>
                                     </select>
                                  </div>
                              </div>
                 
                            <div class="form-group">
                                <label for="varchar" class="col-lg-2 control-label">Username <?php echo form_error('username') ?></label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" name="username" id="username" placeholder="Username" value="<?php echo $username; ?>" />
                                </div>
                            </div>

                            <div class="form-group" class="col-lg-2 control-label">
                                <label for="varchar" class="col-lg-2 control-label" >Password <?php echo form_error('password') ?></label>
                                <div class="col-lg-10">
                                    <input type="password" class="form-control" name="password" id="password" placeholder="Password" <?=$require ?> />
                                </div>
                            </div>

                            <div class="form-group" class="col-lg-2 control-label">
                                <label for="varchar" class="col-lg-2 control-label" >Ulangi Password <?php echo form_error('repassword') ?></label>
                                <div class="col-lg-10">
                                    <input type="password" class="form-control" name="repassword" id="repassword" placeholder="Ulangi Password" <?=$require ?>  />
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="varchar" class="col-lg-2 control-label">Jabatan <?php echo form_error('jabatan') ?></label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" name="jabatan" id="jabatan" placeholder="Jabatan" value="<?php echo $jabatan; ?>" />
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="varchar" class="col-lg-2 control-label">Nama User <?php echo form_error('nama_user') ?></label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" name="nama_user" id="nama_user" placeholder="Nama User" value="<?php echo $nama_user; ?>" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="varchar" class="col-lg-2 control-label">Nomor HP <?php echo form_error('no_hp') ?></label>
                                <div class="col-lg-10">
                                    <input type="text" onkeypress="return runScript(event)" class="form-control" name="no_hp" id="no_hp" placeholder="Nomor HP" value="<?php echo $no_hp; ?>" />
                                </div>
                            </div>
                            <div class="form-group">
                            <label class='col-lg-12'> 
                                  <p> [PENTING].<br>USERNAME diisikan sesuai dengan ketentuan yang telah ditentukan, karena akan mempengaruhi 
                                  pada saat proses verifikasi online.</p>
                                </label>
                            <?php if ($button=='Update') {
                              echo "<label class='col-lg-12'> 
                                  <p> **.Kosongkan Kolom password apabila tidak ingin mengganti pasword pada user tersebut.</p>
                                </label>
                                ";
                            }?>
                                
                            </div>

                            <input type="hidden" name="id_user" value="<?php echo $id_user; ?>" /> 
                            <button type="submit" class="btn btn-primary"><i class="glyphicon glyphicon-floppy-saved"></i> <?php echo $button ?></button> 
                            <a href="<?php echo site_url('user') ?>" class="btn btn-default"><i class="glyphicon glyphicon-floppy-remove"></i> Batal</a>
                        </form>
                    <!--FRO GENERATE -->

                  </div><!-- /.mail-box-messages -->
                </div><!-- /.box-body -->
              </div><!-- /. box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->