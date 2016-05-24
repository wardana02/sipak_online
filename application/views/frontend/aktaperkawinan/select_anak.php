<input type="hidden" name="jum" value="<?php echo $jumlah;?>">
<?php for ($i=1; $i <=$jumlah ; $i++){?>

    <div class="form-group">
         <label class="col-lg-2 control-label">Nama Anak Ke-<?php echo $i;?></label>
           <div class="col-lg-10">

            <input type="text" class="form-control tooltips" name="nama_anak_<?php echo $i;?>" data-toggle="tooltip" data-original-title=" isi " value="<?php echo $nama_pemuka; ?>" />
           </div>
    </div>

                                      <div class="form-group">
                                        <label class="col-lg-2 control-label">Nomor Akta Anak Ke-<?php echo $i;?></label>
                                          <div class="col-lg-3">
                                              <input type="text" class="form-control tooltips" name="nomor_akta_<?php echo $i;?>" data-toggle="tooltip" data-original-title=" isi "/>
                                          </div>
                                          <div  class="col-lg-1"></div>
                                          <label class="col-lg-2 control-label">Tanggal Akta Anak Ke-<?php echo $i;?></label>
                                            <div class="col-lg-3">
                                              <div data-date-viewmode="years" data-date-format="yyyy-mm-dd" data-date="2016-07-10" class="input-append date dpYears">
                                                     <input type="text" name="tgl_akta_<?php echo $i;?>" value="<?php echo $tgl_lapor; ?>" size="16" class="form-control">
                                                      <span class="input-group-btn add-on">
                                                        <button class="btn btn-danger" type="button"><i class="fa fa-calendar"></i></button>
                                                      </span>
                                              </div>
                                              <p class="help-block"><?php echo form_error('tgl_lapor') ?></p>
                                          </div>
                                      </div>

          <?php } ?>

          <!--Date Picker Js-->
    <script src=<?=base_url("assets/frontend2/assets/bootstrap-datepicker/js/bootstrap-datepicker.js");?>></script>
    <script src=<?=base_url("assets/frontend2/assets/bootstrap-timepicker/js/bootstrap-timepicker.js");?>></script>
    <script src=<?=base_url("assets/frontend2/assets/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js");?>></script>

