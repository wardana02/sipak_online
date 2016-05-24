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
                    <form class="form-horizontal" action="<?php echo $action; ?>" method="post">
                            <div class="form-group">
                                  <label for="varchar" class="col-lg-2 control-label">Previlage <?php echo form_error('previlage') ?></label>
                                  <div class="col-lg-10">
                                     <select name="previlage" class="form-control">
                                       <option value="ADMIN" <?php if($previlage=='ADMIN') echo "selected"; ?>> ADMIN</option>
                                       <option value="DUKCAPIL" <?php if($previlage=='DUKCAPIL') echo "selected"; ?>> DUKCAPIL</option>
                                       O<option value="KELURAHAN" <?php if($previlage=='KELURAHAN') echo "selected"; ?>> KELURAHAN</option>
                                       <option value="KETUA RW" <?php if($previlage=='KETUA RW') echo "selected"; ?>> KETUA RW</option>
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
                                    <input type="text" class="form-control" name="password" id="password" placeholder="Password" value="<?php echo $password; ?>" />
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
                            <input type="hidden" name="id_user" value="<?php echo $id_user; ?>" /> 
                            <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
                            <a href="<?php echo site_url('user') ?>" class="btn btn-default">Cancel</a>
                        </form>
                    <!--FRO GENERATE -->

                  </div><!-- /.mail-box-messages -->
                </div><!-- /.box-body -->
              </div><!-- /. box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->