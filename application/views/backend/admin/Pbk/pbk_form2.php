 <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
    <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-md-12">
                <h2 style="margin-top:0px"><?php echo $head; ?></h2>
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
                                  <label for="int" class="col-lg-2 control-label">GroupID <?php echo form_error('GroupID') ?></label>
                                  <div class="col-lg-10">
                                     <input type="text" class="form-control" name="GroupID" id="GroupID" placeholder="GroupID" value="<?php echo $GroupID; ?>" />
                                  </div>
                              </div>
                 
                            <div class="form-group">
                                <label for="Name" class="col-lg-2 control-label">Name <?php echo form_error('Name') ?></label>
                                <div class="col-lg-10">
                                    <textarea class="form-control" rows="3" name="Name" id="Name" placeholder="Name"><?php echo $Name; ?></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="Number" class="col-lg-2 control-label" >Nomor Telepon <?php echo form_error('Number') ?></label>
                                <div class="col-lg-10">
                                    <textarea class="form-control" rows="3" name="Number" id="Number" placeholder="Number"><?php echo $Number; ?></textarea>
                                </div>
                            </div>

                            <input type="hidden" name="ID" value="<?php echo $ID; ?>" /> 
                          <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
                          <a href="<?php echo site_url('pbk') ?>" class="btn btn-default">Cancel</a>
                      </form>
                    <!--FRO GENERATE -->

                  </div><!-- /.mail-box-messages -->
                </div><!-- /.box-body -->
              </div><!-- /. box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->