<!doctype html>
<html>
    <head>
    
     </head>
    <body>
        <h2 style="margin-top:0px">Verifikasi Bukti Pengambilan Akta</h2>
        <table class="table">
        <tr>
          <td colspan="2">Silahkan Sebagai Pengaju Melakukan Hak Akses Atas data Pendaftaran dengan memasukan :</td>
        </tr>
	      </table>
         <form role="form" method="post" action=<?php echo base_url("approval/cek") ?>>
              <div class="form-group">
                   <label for="exampleInputEmail1">Nomor Pendaftaran</label>
                   <input type="text" class="form-control" name="no_pendaftaran" value="PF02170316001" placeholder="Masukan Nomor Pendaftaran Dengan Huruf Kapital">
              </div>
              <div class="form-group">
                   <label for="exampleInputPassword1">Tanggal Daftar</label>
                   <div class="date" data-date="" data-date-format="yyyy-mm-dd" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
                    <input class="form-control datepicker"  data-date-format="yyyy-mm-dd" type="text" name="tgl_daftar" required>
                  </div>
                   
              </div>
              <div class="form-group">
                   <label for="exampleInputEmail1">Kode Unik</label>
                   <input type="text" name="kode_unik" class="form-control" value="VCuOhf J3jW7K" id="exampleInputEmail3" placeholder="Kode Unik Pendaftaran Yang Didapat">
              </div>
              <input type="hidden" name="id_al" value="<?php echo $id;?>" >
              <button type="submit" class="btn btn-success">Akses Data Sekarang!</button>
          </form>
         
         <script type="text/javascript" src="<?php echo base_url()?>assets/date_picker_bootstrap/js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
    <script type="text/javascript" src="<?php echo base_url()?>assets/date_picker_bootstrap/js/locales/bootstrap-datetimepicker.id.js"charset="UTF-8"></script>

    <!-- Fungsi datepickier yang digunakan -->
    <script type="text/javascript">
     $('.datepicker').datetimepicker({
            language:  'id',
            weekStart: 1,
            todayBtn:  1,
      autoclose: 1,
      todayHighlight: 1,
      startView: 2,
      minView: 2,
      forceParse: 0
        });
    </script>  
        </body>
</html>